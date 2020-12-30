<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class newsfeed extends Model
{

	use softDeletes;
	protected $dates = ['deleted_at'];

    protected $fillable = ['category_id','title','slug','short_description','image','description','created_by','updated_by'];
}
