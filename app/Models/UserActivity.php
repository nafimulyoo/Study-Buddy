<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
        'user_id',
        'activity_status',
        'current_subject',
        'study_duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
