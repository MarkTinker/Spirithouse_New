<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table='classes';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'classname', 'classdescription', 'classprice', 'classseats', 'classimg', 'discountclassprice',
    ];

    /**
     * The primary Key
     *
     * integer(11)
     */
     
     protected $primarykey ='classid';
}
