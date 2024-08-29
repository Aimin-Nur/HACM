<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Kelas extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'class';

    protected $fillable = [
        'class_name',
        'description',
        'img',
        'price',
        'date_release',
        'date_finish',
        'max_participant',
        'active',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_class');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'id_class');
    }
}

