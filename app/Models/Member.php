<?php

namespace App\Models;

use App\Traits\UUIDModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Member extends Model
{
    use HasFactory, UUIDModel;

    protected $fillable = [
        'member_code',
        'address',
        'institute',
        'sex',
        'bio',
        'place_of_birth',
        'date_of_birth',
    ];
    protected $casts = [
        'date_of_birth' => 'datetime',
    ];

    public function getDateOfBirthFormatAttribute()
    {
        return $this->date_of_birth->format('d M Y');
    }

    public function getDateOfBirthInputAttribute()
    {
        return $this->date_of_birth->format('Y-m-d');
    }
    /**
     * Relasi untuk mendapatkan akun member
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
