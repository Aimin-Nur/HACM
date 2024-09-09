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
        'price_doctor_specialist',
        'price_doctor',
        'price_nurses',
        'price_student',
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

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', '.');
    }

    public function getFormattedPriceDoctorSpecialistAttribute()
    {
        return number_format($this->price_doctor_specialist, 0, ',', '.');
    }

    public function getFormattedPriceDoctorAttribute()
    {
        return number_format($this->price_doctor, 0, ',', '.');
    }

    public function getFormattedPriceNursesAttribute()
    {
        return number_format($this->price_nurses, 0, ',', '.');
    }

    public function getFormattedPriceStudentAttribute()
    {
        return number_format($this->price_student, 0, ',', '.');
    }
}

