<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','matric_no','gender','date_of_birth','citizenship','marital_status','religion','activity_status','current_year','id_no','email'];
}
