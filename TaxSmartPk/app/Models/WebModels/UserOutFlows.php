<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOutFlows extends Model
{
    use HasFactory;
    protected $table = "user_out_flows";
    protected $fillable = ['OutFlows', 'last_year', 'current_year', 'user_id'];

    public function user_id()
    {
        return $this->belongsTo(user::class);
    }
}
