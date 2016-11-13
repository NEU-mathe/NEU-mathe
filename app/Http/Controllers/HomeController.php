<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proxy(Request $request)
    {
        $remoteURL = "http://202.118.26.80/WebService/";
        return file_get_contents($remoteURL . $request->page . '?' . $request->getQueryString());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function epaper(Request $request)
    {
        return view('epaper', ['Id' => $request->Id, 'DataSource' => $request->DataSource]);
    }

}
