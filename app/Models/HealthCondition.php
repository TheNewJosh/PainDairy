<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCondition extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function UserPatient()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
