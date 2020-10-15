<?php

namespace App\Models;

use App\Traits\UUIDModel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UUIDModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'avatar',
        'admin_id',
        'member_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relasi untuk mendapatkan data dan informasi member
     */
    public function member()
    {
        return $this->hasOne('App\Models\Member', 'id', 'member_id');
    }
    /**
     * Relasi untuk mendapatkan data dan informasi admin
     */
    public function admin()
    {
        return $this->hasOne('App\Models\Admin', 'id', 'admin_id');
    }
    /**
     * Accessor untuk mendapatkan role
     */
    public function getRoleAttribute()
    {
        if (
            $this->admin_id != null &&
            $this->member_id == null
        ) :
            if ($this->admin->_dev == 1) : return 'developer';
            endif;
            return 'admin';
        else :
            return 'member';
        endif;
    }
    /**
     * Accessor untuk mendapatkan role
     */
    public function getProfileUrlAttribute()
    {
        if (
            $this->admin_id != null &&
            $this->member_id == null
        ) :
            return route('admin.profile');
        else :
            return route('member.profile');
        endif;
    }
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar != null) :
            return asset($this->avatar);
        else :
            return 'https://ui-avatars.com/api/size=100&&?name=' . str_replace(' ', '+', $this->name);
        endif;
    }
}
