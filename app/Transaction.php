<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static truncate()
 */
class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'kawanlenta_id',
        'product_id',
    ];

    public function kawanlenta(){
        return $this->belongsTo(Kawanlenta::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
