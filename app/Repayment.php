<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repayment extends Model
{
    function iou() {
    	return belongs_to('App\Iou')
    }
}
