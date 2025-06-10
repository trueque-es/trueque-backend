<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FcmToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'device_name',
        'platform',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}