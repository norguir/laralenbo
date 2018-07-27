<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iou extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ious';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['repayment_delay_unit', 'repayment_delay_value', 'repayment_repeat', 'accepted_at', 'subject', 'amount', 'borrower_id', 'compensation', 'currency', 'initiated_by', 'lender_id', 'money_released', 'pdf'];

    public function lender()
    {
        return $this->belongsTo('App\User');
    }
    public function borrower()
    {
        return $this->belongsTo('App\User');
    }


    // Getters & setters to more eloquent names
    public function getOccurenceAttribute()
    {
        return $this->attributes['repayment_repeat'];
    }

    public function setOccurenceAttribute($value)
    {
        $this->attributes['repayment_repeat'] = $value;
    }

    public function getDelayAttribute()
    {
        return $this->attributes['repayment_delay_value'];
    }

    public function setDelayAttribute($value)
    {
        $this->attributes['repayment_delay_value'] = $value;
    }

    public function getDelayUnitAttribute()
    {
        return $this->attributes['repayment_delay_unit'];
    }

    public function setDelayUnitAttribute($value)
    {
        $this->attributes['repayment_delay_unit'] = $value;
    }
    
}
