<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';

    protected $fillable = [
        'user_id',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
