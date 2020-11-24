<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public static $rules = [
        'news_id' => 'required',
        'edited_at' => 'required',
    ];
    protected $guarded = ['id'];
}
