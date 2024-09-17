<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class working extends Model
{
    use HasFactory;
    protected $fillable=['id','design_id','employee_id','start_date','end_date','stage'];
}
