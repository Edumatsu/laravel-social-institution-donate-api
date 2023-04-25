<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'cell_phone',
        'email',
        'photo_url',
        'last_login',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function following()
    {
        return $this->hasMany(Follower::class, 'follower_id');
    }

    public function followers()
    {
        return $this->hasMany(Follower::class, 'followed_id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'user_id')->where('status', 'completed');
    }

    public function getFullImageUrlAttribute(): string
    {
        return $this->photo_url ? env('AWS_URL') . $this->photo_url : "";
    }

    public function getFollowingCountAttribute(): int
    {
        return $this->following()->count();
    }

    public function getFollowersCountAttribute(): int
    {
        return $this->followers()->count();
    }

    public function getDonationsCountAttribute(): int
    {
        return $this->donations()->count();
    }

    public function getDonationsAmountAttribute(): float
    {
        return $this->donations()->sum('institution_amount');
    }

    public function getInstitutionsDonatedCountAttribute(): int
    {
        return $this->donations()->distinct('institution_id')->count();
    }
}
