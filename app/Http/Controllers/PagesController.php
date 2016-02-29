<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    /**
     * Home page of the application
     * 
     * @return Illumiate\View\View 
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Prototype view
     * @return Illuminate\View\View
     */
    public function proto()
    {
        return view('pages.proto');
    }
}
