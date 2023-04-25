<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'institution_id',
        'institution_amount',
        'payment_institution_fee',
        'institution_final_amount',
        'app_amount',
        'payment_app_fee',
        'app_final_amount',
        'status',
        'transaction_id',
        'preference_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function getActivityTextAttribute(): string
    {
        return $this->user_id == auth()->user()->id ?
            $this->loggedUserDonationText() : $this->otherUserDonationText();
    }

    private function loggedUserDonationText(): string
    {
        return "Efetuou uma doação de <strong>R$ " . number_format($this->institution_amount, 2, ",", ".") .
                "</strong> para <strong>{$this->institution->name}</strong>";
    }

    private function otherUserDonationText(): string
    {
        return "Efetuou uma doação para <strong>{$this->institution->name}</strong>";
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
