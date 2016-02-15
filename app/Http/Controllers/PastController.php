<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PastController extends Controller
{
	/**
	 * Past index page
	 * @return Illumiate\View\View
	 */
	public function index()
	{
		return view('past.index');
	}  
}
