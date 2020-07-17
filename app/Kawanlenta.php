<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kawanlenta extends User
{
    protected $fillable = [
        ''];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
