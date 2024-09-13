<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class RejectedPaymentNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $getOrder;

    /**
     * Buat instance job baru.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     */
    public function __construct(User $user, $getOrder)
    {
        $this->user = $user;
        $this->order = $getOrder;
    }

    /**
     * Jalankan job.
     */
    public function handle()
    {
        // Kirim email ke user
        Mail::to($this->user->email)->send(new \App\Mail\RejectedPaymentSubmitted($this->user, $this->getOrder));
    }
}
