<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\WebModels\UserProperty;
use App\Models\WebModels\UserBanks;
use App\Models\WebModels\UserVechile;
use App\Models\WebModels\UserAssets;
use App\Models\WebModels\UserIncomeFlows;
use App\Models\WebModels\UserOutFlows;
use App\Models\WebModels\UserNetAssets;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'UserPhone',
        'UserCnic',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userImages()
    {
        return $this->hasMany(AppFormImages::class, 'user_id');
    }

    public function userProperties()
    {
        return $this->hasMany(UserProperty::class, 'user_id');
    }

    public function userBanks()
    {
        return $this->hasMany(UserBanks::class, 'user_id');
    }

    public function userVehciles()
    {
        return $this->hasMany(UserVechile::class, 'user_id');
    }

    public function userAssets()
    {
        return $this->hasMany(UserAssets::class, 'user_id');
    }

    public function userIncomeFlows()
    {
        return $this->hasMany(UserIncomeFlows::class, 'user_id');
    }

    public function userOutFlows()
    {
        return $this->hasMany(UserOutFlows::class, 'user_id');
    }

    public function userNetAssets()
    {
        return $this->hasMany(UserNetAssets::class, 'user_id');
    }

}
