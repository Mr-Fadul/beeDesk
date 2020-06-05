<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    public function user(){
        return $this->belongsTo(User::class,'user','id');
    }

    public function categories(){
        // relação n pra n com relação a tabela pivo
        return $this->belongsToMany(Categories::class,'posts_categories','post','category');
    }


}
