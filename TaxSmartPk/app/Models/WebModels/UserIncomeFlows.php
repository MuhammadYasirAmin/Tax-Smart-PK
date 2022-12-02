<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIncomeFlows extends Model
{
    use HasFactory;
    protected $table = "user_reconcilations";
    protected $fillable = ['User_Income', 'last_year', 'current_year', 'user_id'];

    public function user_id()
    {
        return $this->belongsTo(user::class);
    }
}
