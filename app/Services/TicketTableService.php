<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Ticket;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class TicketTableService
{
    public function getTicket()
    {
        return Ticket::with('user', 'kelas')->get();
    }

    public function generateDataTable($usersQuery)
    {
        return DataTables::of($usersQuery)
            ->addColumn('ticket_code', function ($order) {
               return $order->ticket_code;
            })
            ->addColumn('name', function ($order) {
                return $order->user->name;
            })
            ->addColumn('class', function ($order) {
                return $order->kelas->class_name;
            })
            ->addColumn('generate', function ($order) {
                if($order->generate_ticket == 1)
                    return '<span class="badge badge-soft-success">Already Generated</span>';
                elseif($order->generate_ticket == 0)
                    return '<span class="badge badge-soft-danger">Not generating yet</span>';
                else
                    return '<span class="badge badge-soft-warning">Null</span>';
            })
            ->addColumn('active', function ($order) {
                if($order->active == 1)
                    return '<span class="badge badge-soft-success">Already Valiadated</span>';
                elseif($order->active == 0)
                    return '<span class="badge badge-soft-danger">Unvalidated</span>';
                else
                    return '<span class="badge badge-soft-warning">Null</span>';
            })
            ->addColumn('update', function ($order) {
                return \Carbon\Carbon::parse($order->updated_at)->format('M d, Y');
            })
            ->addColumn('action', function ($order) {
                $buttons = '<div class="dropstart">
                                <button type="button" class="btn waves-effect waves-light dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu">';

               if ($order->active != 1) {
                    $buttons .= '<form action="' . route('validate-ticket', ['id' => $order->id]) . '" method="POST">
                                    ' . csrf_field() . '
                                    <button type="submit" class="dropdown-item">Validate Ticket</button>
                                 </form>';
                } elseif ($order->generate_ticket == 1) {
                    $buttons .= '<form action="' . route('generate-again', ['id' => $order->id]) . '" method="POST">
                                    ' . csrf_field() . '
                                    <button type="submit" class="dropdown-item">Generate Again</button>
                                 </form>';
                } elseif ($order->active == 1 || $order->generate_ticket != 1 ) {
                    $buttons .= '<small class="dropdown-item"> <i>Has Been Validated <br>' . \Carbon\Carbon::parse($order->updated_at)->format('M d, Y').'</i> </small>';
                }

                $buttons .= '</div></div>';

                return $buttons;
            })

            ->rawColumns(['action', 'generate', 'active'])
            ->make(true);
    }

}
