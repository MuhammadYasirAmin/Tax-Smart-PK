<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = "contact_forms";
    protected $fillable = ['UserName', 'UserEmail', 'UserSubject', 'UserPhone', 'UserMessage'];
}
