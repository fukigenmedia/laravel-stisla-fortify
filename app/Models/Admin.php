<?php

namespace App\Models;

use App\Traits\UUIDModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Admin extends Model
{
    use HasFactory, UUIDModel;

    protected $fillable = [
        'address',
        'sex',
        'bio',
    ];

    /**
     * Relasi untuk mendapatkan akun admin
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
