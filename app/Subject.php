<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_title', 'subject_desc', 'subject_price', 'subject_image'];
}
