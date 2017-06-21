<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function scopeComplete($query) {
    	return $query->where('complete', 1);
    }

    public  function scopeIncomplete($query) {
    	return $query->where('complete', 0);
    }
}
