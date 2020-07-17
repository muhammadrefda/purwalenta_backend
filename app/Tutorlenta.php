<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static has(string $string)
 */
class Tutorlenta extends User
{
    protected $fillable = [
        ''];

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
