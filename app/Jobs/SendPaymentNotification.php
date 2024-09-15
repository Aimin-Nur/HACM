<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPaymentNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $order;

    /**
     * Buat instance job baru.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     */
    public function __construct(User $user, $order)
    {
        $this->user = $user;
        $this->order = $order;
    }

    /**
     * Jalankan job.
     */
    public function handle()
    {
        // Kirim email ke user
        Mail::to($this->user->email)->send(new \App\Mail\UserPaymentSubmitted($this->user, $this->order));

        // Kirim email ke admin
        Mail::to('gorontalo.acs@gmail.com')
        ->cc('projectwebfinal@gmail.com')
        ->send(new \App\Mail\AdminPaymentNotification($this->user, $this->order));
    }
}
