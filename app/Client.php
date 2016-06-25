<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'user_id',
        'address',
        'phone',
        'identification',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function policies()
    {
        return $this->belongsToMany('App\Policy')->withPivot(['payment_type_id']);
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function scopeByUser($query, User $user)
    {
        return $query
            ->where('user_id', $user->id)
            ->orderBy('name')
        ;
    }
}
