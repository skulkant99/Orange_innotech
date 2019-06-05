<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FundType extends Model
{
    //protected $table = '';
    //protected $primaryKey = '';
    //public $timestamps = true;
    public function FileReport()
    {
        return $this->HasMany('\App\Models\FileReport','fund_type_id','id');    
    }
}
