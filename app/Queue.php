<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    public $table = "queue";
    
//  relação tabela endereço com o usuario  foreginKey,primeryKey
    
    public function ticketQueue($ticket){
        $query = $this->newQuery();
        $query->distinct();
        $query->select('queue.*');
        $query->from('queue');
        $query->where('queue.ticket', $ticket);
        return $query;
    }

    // relação do usuario com o setor
    public function ticket(){
        return $this->hasOne(Ticket::class, 'id','ticket');
    }
    //relação do usuario com o level
    public function priority(){
        return $this->hasOne(Priority::class, 'id','priority');
    }
    public function status(){
        return $this->hasOne(Status::class,'id','status');
    }
    public function technician(){
        return $this->hasMany(User::class,'id','technician');
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
