<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	/**
	 * Get the user that owns the photo.
	 */
	public function user() {
		return $this->belongsTo( User::class );
	}
}
