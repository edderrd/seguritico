<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Payment extends Model
{
    protected $dates = ['paid_at'];

    protected $fillable = [
        'amount',
        'user_id',
        'client_id',
        'paid_at',
        'policy_id',
    ];

    public function scopeByUserOwner($query, User $user)
    {
        return $query
            ->leftjoin('clients', 'clients.id', '=', 'payments.client_id')
            ->where('clients.user_id', $user->id)
        ;
    }

    public function policy()
    {
        return $this->belongsTo('App\Policy');
    }

    public function getAmountFormattedAttribute()
    {
        return "₡ " . money_format('%i', $this->amount);
    }
}
