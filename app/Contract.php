<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = ['reponse1', 'reponse2', 'reponse3','reponse4','reponse5','reponse6','reponse7','reponse8','reponse9'];


    public function user() {
        return $this->belongsTo('App\User');
    }

}


