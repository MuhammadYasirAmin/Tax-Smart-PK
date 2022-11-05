<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentFormModel extends Model
{
    use HasFactory;

    protected $table = "appointment_forms";
    protected $fillable = ['FirstName', 'LastName', 'UserEmail', 'UserPhone', 'SelectAdvisor', 'SelectDate', 'UserMessage'];
}
