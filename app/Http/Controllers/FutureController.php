<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FutureController extends Controller
{

    /**
     * Future index page
     * @return Illumiate\View\View
     */
    public function index()
    {
        return view('future.index');
    }
}
