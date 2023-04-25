<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstitutionImage extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'institution_id',
        'image_url',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
    ];

    public function getFullImageUrlAttribute(): string
    {
        return $this->image_url ? env('AWS_URL') . $this->image_url : "";
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
