<?php

namespace App\Models\AppModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppForm extends Model
{
    use HasFactory;
    protected $table = "app_forms";

    protected $fillable = ['UserName', 'UserEmail', 'UserPhone', 'UserCNIC'];

    public function userImages()
    {
        return $this->hasMany(AppFormImages::class, 'form_id');
    }
}
