<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BotmanDB extends Model
{
    protected $fillable = array(
        'name', 'webact', 'webname', 'webbrand', 'webimage', 'webheader', 'webheaderpara'
    );
}
