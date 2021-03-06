<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['name','position_x','position_y','position_z','height','width'];

    public function multimedia(){
        return $this->belongsTo(Multimedia::class, 'multimedia_id');
    }

    public function text(){
        return $this->belongsTo(Text::class, 'text_id');
    }

//    public function ads(){
//        return $this->belongsToMany(Ad::class, 'ad_components');
//    }
}
