<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = ['text'];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'article_user', 'article_id', 'user_id');
    }
}
