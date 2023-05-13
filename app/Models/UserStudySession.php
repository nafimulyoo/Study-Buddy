<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStudySession extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'duration',
        'session_completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
