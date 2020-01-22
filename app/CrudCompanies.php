<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudCompanies extends Model
{
     protected $fillable = [
    	'name','email','logo','website'
    ];
}
