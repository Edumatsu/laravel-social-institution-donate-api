<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'follower_id',
        'followed_id',
    ];

    public function followingUser()
    {
        return $this->hasOne(User::class, 'id', 'follower_id');
    }

    public function followedUser()
    {
        return $this->hasOne(User::class, 'id', 'followed_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
