<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kelas;
use App\Models\Order;
use App\Models\Ticket;
use App\Services\UserTableService;
use App\Services\OrderTableService;
use App\Services\AdminTableService;
use App\Services\TicketTableService;
use App\Services\YearlyChartService;
use App\Services\ChartRegencyService;
use App\Services\ChartProvinceService;
use App\Services\SimposiumChartService;
use App\Services\SarondeChartService;
use App\Services\LogUserService;
use App\Services\GetUser;
use App\Jobs\SuccessPaymentNotification;
use App\Jobs\RejectedPaymentNotification;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    protected $userServices;
    protected $adminServices;
    protected $orderServices;
    protected $ticketServices;
    protected $yearlyChartServices;
    protected $monthAgoChartServices;
    protected $chartRegencyService;
    protected $chartProvinceService;
    protected $logUserService;
    protected $getGuard;
    protected $simposiumChartService;
    protected $sarondeChartService;

    public function __construct(UserTableService $userServices, AdminTableService $adminServices, OrderTableService $orderServices, TicketTableService $ticketServices, YearlyChartService $yearlyChartServices, ChartRegencyService $chartRegencyService, ChartProvinceService $chartProvinceService, LogUserService $logUserService, GetUser $getGuard, SimposiumChartService $simposiumChartService, SarondeChartService $sarondeChartService)
    {
        $this->userServices = $userServices;
        $this->adminServices = $adminServices;
        $this->orderServices = $orderServices;
        $this->ticketServices = $ticketServices;
        $this->yearlyChartServices = $yearlyChartServices;
        $this->chartRegencyService = $chartRegencyService;
        $this->chartProvinceService = $chartProvinceService;
        $this->logUserService = $logUserService;
        $this->getGuard = $getGuard;
        $this->simposiumChartService = $simposiumChartService;
        $this->sarondeChartService = $sarondeChartService;

    }

    public function index()
    {
        $getUser = $this->getGuard->getCurrentUser();

        $totalSumPrice = Order::join('class', 'order.id_class', '=', 'class.id')
                    ->where('order.status', 1)
                    ->selectRaw('
                        SUM(class.price_doctor_specialist) AS sum_price_doctor_specialist,
                        SUM(class.price_doctor) AS sum_price_doctor,
                        SUM(class.price_nurses) AS sum_price_nurses,
                        SUM(class.price_student) AS sum_price_student
                    ')
                    ->first();

        $totalSumPriceNullVerif = Order::join('class', 'order.id_class', '=', 'class.id')
                    ->where('order.status', 0)
                    ->selectRaw('
                        SUM(class.price_doctor_specialist) AS sum_price_doctor_specialist,
                        SUM(class.price_doctor) AS sum_price_doctor,
                        SUM(class.price_nurses) AS sum_price_nurses,
                        SUM(class.price_student) AS sum_price_student
                    ')
                    ->first();

        $sumPrice = Order::join('class', 'order.id_class', '=', 'class.id')
                    ->where('order.status', 1)
                    ->selectRaw('
                        SUM(class.price_doctor_specialist + class.price_doctor + class.price_nurses + class.price_student) AS total
                    ')
                    ->pluck('total')
                    ->first();

        $sumPriceNullVerif = Order::join('class', 'order.id_class', '=', 'class.id')
                    ->where('order.status', 0)
                    ->selectRaw('
                        SUM(class.price_doctor_specialist + class.price_doctor + class.price_nurses + class.price_student) AS total
                    ')
                    ->pluck('total')
                    ->first();



        // Get the current date and month (Sales Report)
        $currentMonth = Carbon::now()->month;
        $year = Carbon::now()->year;

        // Retrieve traffic (order count) for each class for the current month
        $classTraffic = DB::table('order')
            ->join('class', 'order.id_class', '=', 'class.id')
            ->select('class.class_name', DB::raw('COUNT(order.id) as order_count'))
            ->whereMonth('order.created_at', $currentMonth)
            ->whereYear('order.created_at', $year)
            ->where('order.status', 1)
            ->groupBy('class.class_name')
            ->get();

        // Convert the traffic data into arrays for the ApexCharts
        $classNames = [];
        $orderCounts = [];

        foreach ($classTraffic as $traffic) {
            $classNames[] = $traffic->class_name;
            $orderCounts[] = $traffic->order_count;
        }

       // Menghitung penjualan untuk bulan ini
        $currentMonthSales = DB::table('order')
        ->join('class', 'order.id_class', '=', 'class.id')
        ->where('order.status', 1)
        ->whereMonth('order.created_at', $currentMonth)
        ->whereYear('order.created_at', $year)
        ->selectRaw('
            SUM(
                class.price_doctor_specialist +
                class.price_doctor +
                class.price_nurses +
                class.price_student
            ) AS total_sales
        ')
        ->pluck('total_sales')
        ->first();

        // Menghitung penjualan untuk bulan lalu
        $previousMonthSales = DB::table('order')
        ->join('class', 'order.id_class', '=', 'class.id')
        ->where('order.status', 1)
        ->whereMonth('order.created_at', Carbon::now()->subMonth()->month)
        ->whereYear('order.created_at', $year)
        ->selectRaw('
            SUM(
                class.price_doctor_specialist +
                class.price_doctor +
                class.price_nurses +
                class.price_student
            ) AS total_sales
        ')
        ->pluck('total_sales')
        ->first();

        // Pastikan variabel tidak null
        $currentMonthSales = $currentMonthSales ?? 0;
        $previousMonthSales = $previousMonthSales ?? 0;

        // Menghitung persentase perbedaan antara bulan ini dan bulan lalu
        if ($previousMonthSales > 0) {
        $difference = (($currentMonthSales - $previousMonthSales) / $previousMonthSales) * 100;
        } else {
        $difference = $currentMonthSales > 0 ? 100 : 0; // 100% jika ada penjualan bulan ini dan tidak ada bulan lalu
        }

        // Menentukan apakah penjualan meningkat atau menurun
        $isIncreased = $currentMonthSales > $previousMonthSales;

        // Format rentang tanggal untuk bulan ini
        $currentMonthRange = Carbon::now()->startOfMonth()->format('d M') . ' - ' . Carbon::now()->endOfMonth()->format('d M, Y');

        // Get monthly sales report data
        $monthlyData = $this->yearlyChartServices->getMonthlySalesReport();

        // Get yearly sales report data
        $yearlyData = $this->yearlyChartServices->getYearlySalesData();

        // Ambil data top 10 kota
        $regency = $this->chartRegencyService->getTopCitiesWithOrders();
        $topCity = $this->chartRegencyService->topFirstCity();

        $cities = $regency->pluck('city_name')->toArray();
        $orders = $regency->pluck('total_orders')->toArray();

        // Ambil 5 data provinsi
        $topProvinces = $this->chartProvinceService->getTopProvincesWithorder(5);

         // Mengambil nama provinsi dan jumlah ordernya untuk radar chart
        $provinces = [];
        $orders_prov = [];
        foreach ($topProvinces as $provinceData) {
            $provinces[] = $provinceData->province_name;
            $orders_prov[] = $provinceData->total_orders;
        }

        $logs = $this->logUserService->getLatestUserLogs();


        $roleWiseData = $this->simposiumChartService->getRoleWiseSalesData();

        // Siapkan data untuk Pie Chart
        $labels = array_keys($roleWiseData);
        $series = array_values($roleWiseData);

        $roleWiseDataSaronde = $this->sarondeChartService->getRoleWiseSalesData();

        // Siapkan data untuk Donut Chart
        $labelsSaronde = array_keys($roleWiseDataSaronde);
        $seriesSaronde = array_values($roleWiseDataSaronde);

        $sumValidated = Order::where('status', 1)->count();
        $sumUnvalidated = Order::where('status', NULL)->count();

        return view('admin.index', compact('getUser','sumPrice','sumPriceNullVerif','currentMonthSales',
            'previousMonthSales',
            'difference',
            'isIncreased',
            'currentMonthRange',
            'classNames', // Array of class names for the chart series
            'orderCounts',
            'monthlyData',
            'yearlyData',
            'cities', 'orders',
            'topCity',
            'provinces',
            'orders_prov',
            'logs',
            'labels', 'series',
            'labelsSaronde', 'seriesSaronde',
            'sumValidated',
            'sumUnvalidated')); // Array of order counts for the chart series
    }

    public function yearlySalesReport()
    {
        $classes = Kelas::with('orders')->get();
        $classNames = [];
        $seriesData = [];
        $months = [];

        // Populate the months array
        for ($month = 1; $month <= now()->month; $month++) {
            $months[] = now()->startOfYear()->addMonths($month - 1)->shortMonthName;
        }

        foreach ($classes as $class) {
            $classNames[] = $class->name;

            // Initialize monthly sales with zeroes
            $monthlySales = array_fill(0, now()->month, 0);

            // Count the orders for each month
            foreach ($class->orders as $order) {
                $orderMonth = $order->created_at->month;
                $monthlySales[$orderMonth - 1]++;
            }

            $seriesData[] = [
                'name' => $class->name,
                'type' => 'line', // or 'column', 'area'
                'data' => $monthlySales,
            ];
        }

        // Ensure no null or empty data is sent
        if (empty($seriesData)) {
            $seriesData[] = [
                'name' => 'No Data',
                'type' => 'line',
                'data' => array_fill(0, now()->month, 0),
            ];
        }

        return view('sales-report-yearly', compact('classNames', 'seriesData', 'months'));
    }


    public function users(Request $request)
    {
        $getUser = $this->getGuard->getCurrentUser();

        if ($request->ajax()) {
            $userServices = $this->userServices->getUsers();
            return $this->userServices->generateDataTable($userServices);
        }

        return view('admin.users', compact('getUser'));
    }

    public function detailUsers($name)
    {
        $getUser = $this->getGuard->getCurrentUser();

        $detail = User::where('name', $name)->first();
        return view('admin.detail-users', compact('detail', 'getUser'));
    }

    public function admin(Request $request)
    {
        $getUser = $this->getGuard->getCurrentUser();

        $admin = Admin::get();
        if ($request->ajax()) {
            $adminServices = $this->adminServices->getAdmin();
            return $this->adminServices->generateDataTable($adminServices);
        }
        return view('admin.admin', compact('admin','getUser'));
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $request->validate([
                'is_active' => 'boolean',
            ]);

            $user = Admin::findOrFail($id);
            $user->active = $request->input('is_active');
            $user->save();

            return redirect()->route('dashboard-panel')->with('success', 'Status Admin saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function editUser(Request $request, $id)
    {
        try {
            $request->validate([
                'is_active' => 'boolean',
            ]);

            $user = User::findOrFail($id);
            $user->active = $request->input('is_active');
            $user->save();

            return redirect('/dashboard/users')->with('success', 'Status User saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function pricingClass()
    {
        $getUser = $this->getGuard->getCurrentUser();

        $getClass = Kelas::where('active', 1)->get();
        return view('admin.pricing', compact('getClass','getUser'));
    }

    public function showArchiveClass()
    {
        $getUser = $this->getGuard->getCurrentUser();

        $getClass = Kelas::where('active', 0)->get();
        return view('admin.archive-class', compact('getClass', 'getUser'));
    }

    public function formClass()
    {
        $getUser = $this->getGuard->getCurrentUser();
        return view('admin.addClass', compact('getUser'));
    }

    public function storeClass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'workshopName' => 'required|string|max:255',
            'dateClassStart' => 'required|date',
            'dateClassEnd' => 'required|date',
            'description' => 'required|string|max:1000',
            'priceDoctorSpecialist' => 'required|numeric',
            'priceDoctor' => 'required|numeric',
            'priceNurses' => 'required|numeric',
            'priceStudent' => 'required|numeric',
            'file.*' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $uploadedFileNames = [];
            if ($request->hasFile('file')) {
                foreach ($request->file('file') as $file) {
                    $filename = $file->getClientOriginalName();
                    $file->storeAs('public/uploads', $filename);
                    $uploadedFileNames[] = $filename;
                }
            }

            Kelas::create([
                'class_name' => $request->input('workshopName'),
                'date_release' => $request->input('dateClassStart'),
                'date_finish' => $request->input('dateClassEnd'),
                'description' => $request->input('description'),
                'max_participant' => $request->input('price'),
                'price_doctor_specialist' => $request->input('priceDoctorSpecialist'),
                'price_doctor' => $request->input('priceDoctor'),
                'price_nurses' => $request->input('priceNurses'),
                'price_student' => $request->input('priceStudent'),
                'max_participant' => 100,
                'img' => implode(',', $uploadedFileNames),
            ]);

            return redirect()->route('pricing-class')->with('success', 'Data saved successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function orderList(Request $request)
    {
        $getUser = $this->getGuard->getCurrentUser();

        if ($request->ajax()) {
            $orderServices = $this->orderServices->getOrders();
            return $this->orderServices->generateDataTable($orderServices);
        }
        return view('admin.order-list', compact('getUser'));
    }

    public function ticketList(Request $request)
    {
        $getUser = $this->getGuard->getCurrentUser();

        if ($request->ajax()) {
            $ticketServices = $this->ticketServices->getTicket();
            return $this->ticketServices->generateDataTable($ticketServices);
        }
        return view('admin.ticket-list', compact('getUser'));
    }

    public function orderDetail($id)
    {
        $getUser = $this->getGuard->getCurrentUser();

        $getOrderId = Order::with('user', 'kelas')->where('id', $id)->first();
        return view('admin.order-detail', compact('getOrderId','getUser'));
    }

    public function editPayment(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'boolean',
            ]);


            // Konversi status input ke boolean
            $status = filter_var($request->input('status'), FILTER_VALIDATE_BOOLEAN);

            $getOrder = Order::findOrFail($id);
            $getOrder->status = $status; // Simpan status baru

           // Get User
            $userId = $getOrder->id_users; // ID pengguna
            $user = User::findOrFail($userId); // Ambil instance dari User berdasarkan ID

            $class = Kelas::findOrFail($getOrder->id_class);
            $classInitial = strtoupper(substr($class->class_name, 0, 1));

            $ticketCount = Ticket::where('id_class', $getOrder->id_class)->count();
            $orderNumber = str_pad($ticketCount + 1, 2, '0', STR_PAD_LEFT); // Menghasilkan urutan dengan dua digit

            // Ambil 2 digit random dari UUID id_class
            $classUuidPart = substr(str_replace('-', '', $getOrder->id_class), random_int(0, 30), 2);

            // Ambil 2 digit random dari UUID id_users
            $userUuidPart = substr(str_replace('-', '', $getOrder->id_users), random_int(0, 30), 2);

            // Buat ticket_code dengan format E013486
            $ticketCode = $classInitial . $orderNumber . $classUuidPart . $userUuidPart;

            // Simpan order dengan status baru terlebih dahulu
            $getOrder->save();

            // Cek duplikasi kode tiket sebelum membuatnya
            while (Ticket::where('ticket_code', $ticketCode)->exists()) {
                $classUuidPart = substr(str_replace('-', '', $getOrder->id_class), random_int(0, 30), 2);
                $userUuidPart = substr(str_replace('-', '', $getOrder->id_users), random_int(0, 30), 2);
                $ticketCode = $classInitial . $orderNumber . $classUuidPart . $userUuidPart;
            }

            // Buat tiket baru
            Ticket::create([
                'id_class' => $getOrder->id_class,
                'id_users' => $getOrder->id_users,
                'id_order' => $getOrder->id,
                'generate_ticket' => 0,
                'active' => 0,
                'ticket_code' => $ticketCode,
            ]);

            SuccessPaymentNotification::dispatch($user, $getOrder);

            return redirect()->route('order-list')->with('success', 'Data has been successfully validated.');
        } catch (\Exception $e) {
            return redirect()->route('order-list')->with('error', 'An error occurred while validating the data.');
        }
    }

    public function rejectedPayment(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'boolean',
            ]);

            $getOrder = Order::findOrFail($id);
            $getOrder->status = $request->input('status');

            // Get User
            $userId = $getOrder->id_users; // ID pengguna
            $user = User::findOrFail($userId); // Ambil instance dari User berdasarkan ID

            $getOrder->save();

            RejectedPaymentNotification::dispatch($user, $getOrder);

            return redirect()->back()->with('success', 'Payment has been Rejected');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while validating the data.');
        }
    }

    public function archiveClass(Request $request, $id)
    {
        try {
            $request->validate([
                'active' => 'boolean',
            ]);

            $getClass = Kelas::findOrFail($id);
            $getClass->active = $request->input('active');

            $getClass->update();

            session()->flash('success', 'Workshop Successfully Removed');
            return redirect()->session('status', 'success');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed: ' . $e->getMessage());
            return redirect()->back()
            ->with('status', 'error')
            ->with('message', 'Failed : Class failed to remove, Try more again!');
        }
    }

    public function generateTicketAgain($id)
    {
        try {

            $getTicket = Ticket::findOrFail($id);
            $getTicket->generate_ticket = 0;

            $getTicket->save();

            return redirect()->route('ticket-list')->with('success', 'Generate ticket has been successfully update.');
        } catch (\Exception $e) {
            return redirect()->route('ticket-list')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function validateTicket($id)
    {
        try {

            $getTicket = Ticket::findOrFail($id);
            $getTicket->active = 1;

            $getTicket->save();

            return redirect()->route('ticket-list')->with('success', 'Ticket has been successfully validate.');
        } catch (\Exception $e) {
            return redirect()->route('ticket-list')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

}
