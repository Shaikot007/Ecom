<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    private static $user;

    public static function newUser($request)
    {
        self::$user = new User();
        self::$user->name           = $request->name;
        self::$user->email          = $request->email;
        self::$user->password       = $request->password;
        self::$user->phone_number   = $request->phone_number;
        self::$user->address        = $request->address;
        self::$user->save();
    }

    public static function updateUser($request, $id)
    {
        self::$user = User::find($id);
        self::$user->name           = $request->name;
        self::$user->email          = $request->email;
        self::$user->phone_number   = $request->phone_number;
        self::$user->address        = $request->address;
        self::$user->user_type      = $request->user_type;
        self::$user->save();
    }

    public static function deleteUser($id)
    {
        self::$user = User::find($id);
        self::$user->delete();
    }
}
