<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable=['id','name','start_date','end_date','stage','desc','finished'];
    public function employees(){
        return $this->belongsToMany(Employee::class,'working','design_id','employee_id');
    }

}
