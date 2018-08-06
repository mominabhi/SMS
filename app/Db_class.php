<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Db_class extends Model
{
    protected $table = 'class_models';
    //
    public function db_secs(){
        return $this->belongsToMany('App\Db_sec','class_sec','class_model_id','sec_model_id');
    }
}
