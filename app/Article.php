<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = ['text'];

    protected $dates = ['deleted_at'];

    public function its_author($user){
        if(get_class($user) === 'App\User'){
            if($this->trashed()) return NULL;
            foreach ($this->users() as $author) {
                if($author == $user) return TRUE;
            }
            return FALSE;
        }else{
            throw new InvalidArgumentException('Its not User!');
        };
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'article_user', 'article_id', 'user_id');
    }
}
