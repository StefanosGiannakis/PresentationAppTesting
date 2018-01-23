<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Presentation extends Model
{

		protected $table = 'presentations';

		public function owner() {
    	return $this->belongsTo('App\User', 'id');
    }
}
