<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVechile extends Model
{
    use HasFactory;
    protected $table = "user_vechiles";
    protected $fillable = ['Reg_No', 'last_year', 'current_year', 'user_id'];

    public function user_id()
    {
        return $this->belongsTo(user::class);
    }
}
