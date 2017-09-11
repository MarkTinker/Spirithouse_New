<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table='schedule';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'scheduledate', 'classid', 'full', 'bookings', 'daynight', 'starttime', 'discount', 'discount_price', 'scheduleseats'

    /**
     * The primary Key
     *
     * integer(11)
     */
     
     protected $primarykey ='scheduleid';
    ]; 
}