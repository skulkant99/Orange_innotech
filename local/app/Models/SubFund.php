<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubFund extends Model
{
    //protected $table = '';
    //protected $primaryKey = '';
    //public $timestamps = true;
    public function SubFundTitle()
    {
        return $this->HasMany('\App\Models\SubFundTitle','sub_fund_id','id');    
    }
}
