<?php

namespace App\Jobs;

use PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable; // Tambahkan ini
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateTicketPdfJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        $data = ['name' => $this->user->name, 'event' => 'Concert XYZ'];
        $pdf = PDF::loadView('ticket.ticket', $data);

        // Kirim hasil PDF langsung kepada user
        return $pdf->download('ticket.pdf');
    }
}

