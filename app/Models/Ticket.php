<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Ticket extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'ticket';

    protected $fillable = [
        'id_class',
        'id_users',
        'id_order',
        'generate_ticket',
        'active',
        'ticket_code',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_class');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }
}
