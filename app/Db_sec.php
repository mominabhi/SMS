<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Db_sec extends Model
{
    protected $table = 'sec_models';
    //
    public function db_classes(){
        return $this->belongsToMany('App\Db_class','class_sec','sec_model_id','class_model_id');
    }
}
