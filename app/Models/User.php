<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected  $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function DoctorAppointmentDoctor()
    {
        return $this->hasMany(DoctorAppointment::class, 'doctor_id');
    }
    
    public function DoctorAppointmentPatient()
    {
        return $this->hasMany(DoctorAppointment::class, 'patient_id');
    }
    
    public function PainRecordPatient()
    {
        return $this->hasMany(PainRecord::class, 'user_id');
    }
    
    public function HealthConditionPatient()
    {
        return $this->hasMany(HealthCondition::class, 'user_id');
    }

    public function UserDoctorRes()
    {
        return $this->belongsTo(User::class, 'doctor_res');
    }
}
