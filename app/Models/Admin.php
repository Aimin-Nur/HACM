<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Admin extends Authenticatable
{
    use HasFactory, HasUuids, Notifiable, HasApiTokens;

    protected $table = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M d, Y');
    }

    // Accessor untuk updated_at
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('M d, Y');
    }
}
