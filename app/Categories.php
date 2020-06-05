<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function posts(){
        // relação n pra n com relação a tabela pivo
        return $this->belongsToMany(Posts::class,'posts_categories','category','post');
    }

}
