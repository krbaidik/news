<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class category extends Model
{

	use softDeletes;
	protected $dates = ['deleted_at'];
   	protected $fillable = ['name','rank','slug','created_by','updated_by'];
}



