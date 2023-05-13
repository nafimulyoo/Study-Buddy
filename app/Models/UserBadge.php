<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStudyPost extends Model
{
    protected $fillable = [
        'user_id',
        'post_content',
        'likes',
        'replies',
        'study_duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
