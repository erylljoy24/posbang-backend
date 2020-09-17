<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $table = 'history';
    protected $fillable = ['name', 'quantity', 'cat_id', 'menu_id'];
}
