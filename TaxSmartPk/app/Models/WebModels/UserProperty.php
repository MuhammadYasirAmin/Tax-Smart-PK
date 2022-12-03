<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProperty extends Model
{
    use HasFactory;
    protected $table = "user_properties";
    protected $fillable = ['Property_Details', 'last_year', 'current_year', 'user_id'];

    public function user_id()
    {
        return $this->belongsTo(User::class);
    }
}
