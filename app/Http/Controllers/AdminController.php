<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Services\UserTableService;
use App\Services\AdminTableService;


class AdminController extends Controller
{
    protected $userServices;
    protected $adminServices;

    public function __construct(UserTableService $userServices, AdminTableService $adminServices)
    {
        $this->userServices = $userServices;
        $this->adminServices = $adminServices;
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


}
