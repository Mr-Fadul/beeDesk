<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setors';

    public function user(){
        return $this->belongsToMany(User::class,'setor','id');
    }

    public function categories(){
        // relação n pra n com relação a tabela pivo
       // return $this->belongsToMany(Categories::class,'posts_categories','post','category');
    }
}
