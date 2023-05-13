<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'achievement_name',
        'description',
        'icon',
        'achievement_point',
    ];

    public function userAchievements()
    {
        return $this->hasMany(UserAchievement::class);
    }
}
