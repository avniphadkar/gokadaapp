<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelRequest extends Model
{
	//We can define relationships here
	
    public function parcelUsers(){
		return $this->belongsTo('App\User','user_id');
	}
	
	public function parcelDrivers(){
		return $this->belongsTo('App\Driver','driver_id');
	}

	public function parcelDetails()
	{
		//return $this->hasMany()
	}
}
