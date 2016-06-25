<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Policy extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'insurer_id',
        'policy_type_id',
    ];

    public function scopeByUser($query, User $user)
    {
        return $query
            ->leftjoin('client_policy', 'policies.id', '=', 'client_policy.policy_id')
            ->leftjoin('clients', 'clients.id', '=', 'client_policy.client_id')
            ->where('clients.user_id', $user->id)
        ;
    }

    public function insurer()
    {
        return $this->belongsTo('App\Insurer');
    }

    public function policyType()
    {
        return $this->belongsTo('App\PolicyType');
    }

    public function getPriceFormattedAttribute()
    {
        return "₡ " . money_format('%i', $this->price);
    }
}
