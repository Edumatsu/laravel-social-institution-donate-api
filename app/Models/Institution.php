<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'about',
        'document',
        'phone',
        'cellphone',
        'logo_url',
        'slug',
        'website',
        'facebook',
        'instagram',
        'payment_token',
        'special_donate_text',
        'special_donate_url',
        'voluntary_text',
        'voluntary_url',
        'money_donate',
        'approved',
        'active',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'institution_categories')->where('main', true);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'institution_categories');
    }

    public function categoriesBackoffice(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'institution_categories')->where('main', false);
    }

    public function images(): HasMany
    {
        return $this->hasMany(InstitutionImage::class);
    }

    /**
     * Get the custom fields for the client.
     */
    public function isFavorite()
    {
        return auth()->user() ? $this->hasOne(Favorite::class)->where('user_id', auth()->user()->id)->first() : null;
    }

    public function getConcatenatedCategoriesAttribute(): string
    {
        $categoryNames = $this->categories()->pluck('name')->toArray();

        return implode(", ", $categoryNames);
    }

    public function getisFavoriteAttribute(): bool
    {
        return $this->isFavorite() ? true : false;
    }

    public function getFullLogoUrlAttribute(): string
    {
        return $this->logo_url ? env('AWS_URL') . $this->logo_url : "";
    }
}
