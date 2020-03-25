<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $appends = ['text'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'article_user', 'article_id', 'user_id');
    }
}
