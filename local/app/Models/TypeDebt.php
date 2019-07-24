<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeDebt extends Model
{
    //protected $table = '';
    //protected $primaryKey = '';
    //public $timestamps = true;
    public function Debt()
    {
        return $this->HasMany('\App\Models\Debt','type_debt_id','id');    
    }
}
