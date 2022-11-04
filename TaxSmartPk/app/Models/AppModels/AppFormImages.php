<?php

namespace App\Models\AppModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class AppFormImages extends Model
{
    use HasFactory;

    protected $table = "app_form_images";
    protected $fillable = ['UserImages'];

    public function userInfo()
    {
        return $this->belongsTo(AppForm::class,);
    }
}
