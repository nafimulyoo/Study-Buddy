<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $fillable = [
        'badge_name',
        'description',
        'icon',
        'badge_point',
    ];

    public function userBadges()
    {
        return $this->hasMany(UserBadge::class);
    }
}
