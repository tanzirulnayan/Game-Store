<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    protected $table = 'game_type';
    protected $primaryKey ="TYPE_ID";
    public $timestamps =false;
}
