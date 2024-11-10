<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogApp extends Model
{
    use HasFactory;

    protected $table = 'log_app';

    protected $fillable = [
        'action',
        'description',
        'query',
        'user_id',
        'user_name',
    ];
}
