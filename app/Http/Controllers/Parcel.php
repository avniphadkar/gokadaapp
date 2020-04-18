<?php

namespace App\Http\Controllers;

use App\User;
use App\Driver;
use App\Parcel;
use App\ParcelDetail;
use App\Rating;

use Illuminate\Http\Request;

class Parcel extends Controller
{
	public function index(){}
	
    //Create Parcel Request 
	public function addParcelRequest(){}
	
	//Add Parcel Details 
	public function addParcelDetails(){}
	
	//Find Driver or set driver
	public function getDrivers(){}

	//Rate Order
	public function rateOrder(){}
}
