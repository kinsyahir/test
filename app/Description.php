<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    //to get data in COURSE TABLE 
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    //to get data in SUBJECT TABLE 
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
