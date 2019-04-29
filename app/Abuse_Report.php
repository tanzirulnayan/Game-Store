<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuse_Report extends Model
{
    protected $table = 'abuse_reports';
    protected $primaryKey ="AR_ID";
    public $timestamps =false;
}
