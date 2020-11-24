<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // 以下を追記
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
    ];
    protected $guarded = ['id'];
    // Newsモデルに関連付けを行う
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
