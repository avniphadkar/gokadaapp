<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelDetail extends Model
{
    //
	public function parcelRequest(){
		return $this->belongsTo('App\ParcelRequest','parcel_id');
	}
}
