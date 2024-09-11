<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'order';

    protected $fillable = [
        'id_class',
        'id_users',
        'status',
        'description',
        'payment_proof',
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

    /**
     * Accessor untuk mendapatkan harga sesuai dengan role pengguna.
     */
    public function getPriceAttribute()
    {
        $kelas = $this->kelas;
        $userRole = $this->user->roles;

        switch ($userRole) {
            case 'Specialist Doctor':
                return $kelas->price_doctor_specialist;
            case 'Doctor':
                return $kelas->price_doctor;
            case 'Nurse':
                return $kelas->price_nurses;
            case 'Student':
                return $kelas->price_student;
            default:
                return $kelas->price;
        }
    }

    /**
     * Accessor untuk mendapatkan harga format sesuai role pengguna.
     */
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', '.');
    }


}
