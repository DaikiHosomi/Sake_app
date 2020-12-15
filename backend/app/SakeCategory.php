<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SakeCategory extends Model
{
    protected $table = 'sake_categories';

    protected $fillable = [
        'name'
    ];

    public function users() {
        return $this->hasMany('App\User');
    }

}
