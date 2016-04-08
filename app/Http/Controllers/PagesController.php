<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Home page of the application
     *
     * @return Illumiate\View\View
     */
    public function index()
    {
        return view('templates.app');
    }

    /**
     * Home page of the application
     *
     * @return Illumiate\View\View
     */
    public function history()
    {
        return view('pages.history');
    }

    /**
     * Past page of the application
     *
     * @return Illumiate\View\View
     */
    public function past()
    {
        return view('pages.past');
    }

    /**
     * Present page of the application
     *
     * @return Illumiate\View\View
     */
    public function present()
    {
        return view('pages.present');
    }

    /**
     * Future page of the application
     *
     * @return Illumiate\View\View
     */
    public function future()
    {
        return view('pages.future');
    }

    /**
     * Future page of the application
     *
     * @return Illumiate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Future page of the application
     *
     * @return Illumiate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
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
