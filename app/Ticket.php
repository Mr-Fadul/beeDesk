<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
//  relação tabela endereço com o usuario  foreginKey,primeryKey
    
    // relação do usuario com o setor
    public function setor(){
        return $this->hasOne(Setor::class, 'id','setor');
    }
    //relação do usuario com o level
    public function category(){
        return $this->hasOne(Category::class, 'id','category');
    }
    public function user(){
        return $this->hasMany(User::class,'id','user');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }



}
