<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAppointment extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function UserDoctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function UserPatient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
