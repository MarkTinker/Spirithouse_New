<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='menu';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menucat', 'menuorder', 'menuitem', 'menuprice', 'banquet', 'banquet2',
    ];

    /**
     * The primary Key
     *
     * integer(11)
     */
     
    protected $primarykey ='menuid';
}
