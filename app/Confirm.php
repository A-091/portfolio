<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'contents' => 'required',
        'name' => 'required',
        'tel' => 'required',
        'email' => 'required',
    );
}
