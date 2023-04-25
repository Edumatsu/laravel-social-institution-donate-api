<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendedInstitution extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'month',
        'year',
        'institution_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
