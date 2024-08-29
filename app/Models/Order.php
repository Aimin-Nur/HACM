<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'order';

    protected $fillable = [
        'id_class',
        'id_users',
        'status',
        'description',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_class');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class, 'id_order');
    }
}
