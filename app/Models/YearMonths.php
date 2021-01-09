<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearMonths extends Model
{
    use HasFactory;

    public function calender(){
        return $this->hasMany(Calender::class,'year_month_id','id');
    }
}
