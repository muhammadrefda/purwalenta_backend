<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static truncate()
 */
class Course extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'price',
        'imageIntroduction',
        'videoIntroduction',
        'videoModule',
        'quantity',
        'tutorlenta_id',
    ];

    public function tutorlenta(){
        return $this->belongsTo(Tutorlenta::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
