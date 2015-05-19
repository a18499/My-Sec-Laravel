<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Pagecontroller extends Controller {

	//
	public function about()
	{
		$first ='Peter';
		$last ='Huang';
		return view('about',compact('first' ,'last'));
	}


}
