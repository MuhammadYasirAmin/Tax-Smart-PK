<?php

namespace App\Models\WebModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNetAssets extends Model
{
    use HasFactory;
    protected $table = "user_net_assets";
    protected $fillable = ['Net_Assets', 'Asset_Amount', 'user_id'];

    public function user_id()
    {
        return $this->belongsTo(User::class);
    }
}
