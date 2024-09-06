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
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    protected $userServices;
    protected $adminServices;
    protected $orderServices;
    protected $ticketServices;

    public function __construct(UserTableService $userServices, AdminTableService $adminServices, OrderTableService $orderServices, TicketTableService $ticketServices)
    {
        $this->userServices = $userServices;
        $this->adminServices = $adminServices;
        $this->orderServices = $orderServices;
        $this->ticketServices = $ticketServices;
    }

    public function index()
    {
        $getUser = Auth::user();
        return view('admin.index', compact('getUser'));
    }

    public function users(Request $request)
    {
        if ($request->ajax()) {
            $userServices = $this->userServices->getUsers();
            return $this->userServices->generateDataTable($userServices);
        }

        return view('admin.users');
    }

    public function detailUsers($name)
    {
        $detail = User::where('name', $name)->first();
        return view('admin.detail-users', compact('detail'));
    }

    public function admin(Request $request)
    {
        $admin = Admin::get();
        if ($request->ajax()) {
            $adminServices = $this->adminServices->getAdmin();
            return $this->adminServices->generateDataTable($adminServices);
        }
        return view('admin.admin', compact('admin'));
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

            session()->flash('success', 'Status admin berhasil diperbarui!');
            return redirect('/dashboard/panel/admin')->session('status', 'success');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed: ' . $e->getMessage());
            return redirect('/dashboard/panel/admin')
            ->with('status', 'error')
            ->with('message', 'Status admin gagal diperbarui.');
        }
    }

    public function pricingClass()
    {
        $getClass = Kelas::where('active', 1)->get();
        return view('admin.pricing', compact('getClass'));
    }

    public function showArchiveClass()
    {
        $getClass = Kelas::where('active', 0)->get();
        return view('admin.archive-class', compact('getClass'));
    }

    public function formClass()
    {
        return view('admin.addClass');
    }

    public function storeClass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'className' => 'required|string|max:255',
            'dateClass' => 'required|date',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'file.*' => 'mimes:jpg,jpeg,png|max:2048',
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
                'class_name' => $request->input('className'),
                'date_release' => $request->input('dateClass'),
                'date_finish' => $request->input('dateClass'),
                'description' => $request->input('description'),
                'max_participant' => $request->input('price'),
                'price' => $request->input('price'),
                'img' => implode(',', $uploadedFileNames),
            ]);

            return redirect()->route('pricing-class')->with('success', 'Data saved successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function orderList(Request $request)
    {
        if ($request->ajax()) {
            $orderServices = $this->orderServices->getOrders();
            return $this->orderServices->generateDataTable($orderServices);
        }
        return view('admin.order-list');
    }

    public function ticketList(Request $request)
    {
        if ($request->ajax()) {
            $ticketServices = $this->ticketServices->getTicket();
            return $this->ticketServices->generateDataTable($ticketServices);
        }
        return view('admin.ticket-list');
    }

    public function orderDetail($id)
    {
        $getOrderId = Order::with('user', 'kelas')->where('id', $id)->first();
        return view('admin.order-detail', compact('getOrderId'));
    }

    public function editPayment(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'boolean',
            ]);

            $getOrder = Order::findOrFail($id);
            $getOrder->status = $request->input('status');

            Ticket::create([
                'id_class' => $getOrder->id_class,
                'id_users' => $getOrder->id_users,
                'id_order' => $getOrder->id,
                'generate_ticket' => 0,
                'active' => 1,
            ]);

            $getOrder->save();

            session()->flash('success', 'Payment has Been Successfully Validated');
            return redirect()->session('status', 'success');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed: ' . $e->getMessage());
            return redirect()->back()
            ->with('status', 'error')
            ->with('message', 'Failed : Failure to Validated Payment, Try more again!');
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

            $getOrder->save();

            session()->flash('success', 'Payment has Been Rejected');
            return redirect()->session('status', 'success');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed: ' . $e->getMessage());
            return redirect()->back()
            ->with('status', 'error')
            ->with('message', 'Failed : Failure to reject payment, Try more again!');
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

            session()->flash('success', 'Class Successfully Removed');
            return redirect()->session('status', 'success');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed: ' . $e->getMessage());
            return redirect()->back()
            ->with('status', 'error')
            ->with('message', 'Failed : Class failed to remove, Try more again!');
        }
    }

}
