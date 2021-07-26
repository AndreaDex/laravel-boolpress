<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'surname', 'dob', 'email', 'message', 'category_id'];
}
