<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title', 'total_answers', 'correct_answers'
    ];

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
