<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['id','name','gender','salary','dept','job_title'];
    public function designs(){
        return $this->belongsToMany(Design::class,'working','employee_id','design_id');
    }
}
