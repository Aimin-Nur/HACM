<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'active',
        'password',
        'phone_number',
        'email',
        'address',
        'provinsi',
        'kota',
        'kecamatan',
        'roles',
        'NIK',
        'address',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_users');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'id_users');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinsi');
    }

    // Relasi ke Kota/Regency
    public function regency()
    {
        return $this->belongsTo(Regency::class, 'kota');
    }

    // Relasi ke Kecamatan/District
    public function district()
    {
        return $this->belongsTo(District::class, 'kecamatan');
    }
}
