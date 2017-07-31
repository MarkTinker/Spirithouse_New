<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    /**
     * The table associated with the model
     *
     * @var string     
    */
    protected $able = 'shop_items';

    /**
     * The primary Key
     *
     * integer(11)
     */

    protected $primarykey = 'itemId';
}
