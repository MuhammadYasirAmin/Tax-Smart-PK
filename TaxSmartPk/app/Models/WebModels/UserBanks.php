<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBanks extends Model
{
    use HasFactory;
    protected $table = "user_banks";
    protected $fillable = ['Bank_Name', 'last_year', 'current_year', 'user_id'];

    public function user_id()
    {
        return $this->belongsTo(user::class);
    }
}
