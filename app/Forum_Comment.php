<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum_Comment extends Model
{
    protected $table = 'forum_comments';
    protected $primaryKey ="C_ID";
    public $timestamps =false;
}
