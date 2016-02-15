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
        $employee = Employee::find(1)->get();
        return view('pages/home')->with($employee);
    }
}
