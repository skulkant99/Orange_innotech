<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //protected $table = '';
    //protected $primaryKey = '';
    //public $timestamps = true;
    public function Answer()
    {
        return $this->HasMany('\App\Models\Answer','question_id','id');    
    }
}
