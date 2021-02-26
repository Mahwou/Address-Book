<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    //
    use Searchable;

    protected $fillable = [
        'name', 'phone', 'address',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
