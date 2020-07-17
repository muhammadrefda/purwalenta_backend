<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;

/**
 * @method static create(array $array)
 * @method static truncate()
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;


    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';

    protected $table ='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'username',
        'phone_number',
        'date_of_birth',
        'balance',
        'profile_picture',
        'profile_desc',
        'google_token',
        'status',
        'refresh_token',
        'acc_bank',
        'skill',
        'personality',
        'verified',
        'verification_token',
        'available_date',
        'available_time',
        'note',
//        'facebook_id',
//        'google_id',


    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verification_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isVerified(){
        return $this->verified == User::VERIFIED_USER;
    }

    public function isAdmin(){
        return $this->admin == User::ADMIN_USER;
    }

//Untuk amanin dari metode brute force verification token
    public static function generateVerificationCode()
    {
        return str::random(40);
    }
}
