<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contacts';
    protected $primarykey=['id'];
    protected $fillable=['Fname','Lname','email','massage'];

}
