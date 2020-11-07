<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'username' => 'required|max:20',
        'password' => 'required|min:6|confirmed',
        'contents' => 'required',
        'name' => 'required|max:10',
        'tel' => 'required|numeric',
        'email' => 'required|email|max:100',
    );
}
