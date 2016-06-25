<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurer extends Model
{
    protected $fillable = ['name', 'description'];

    public function policies()
    {
        return $this->hasMany('App\Policy');
    }
}
