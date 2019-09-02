<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // protected $uploads = '{{ URL::to('/') }}/uploads/images/';

    protected $fillable = ['file'];


    // public function getFileAttribute($photo){
    //
    //
    //     return $this->uploads . $photo;
    //
    //
    // }

}
