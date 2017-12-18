<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
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

    public function scopeSearch($query, $search)
    {
        return $query->where('course_name', 'like', '%' .$search. '%')
                     ->orWhere('subject_title', 'like', '%' .$search. '%');
    }
}

?>