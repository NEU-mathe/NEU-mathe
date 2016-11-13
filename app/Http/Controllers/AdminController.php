<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ftp()
    {
        system("ln -s . 202.118.26.80");
        system("wget -r -np -k --restrict-file-names=nocontrol ftp://LoginName:Q191KPgC@202.118.26.80/ChoiceSource");
        return "";
    }
}
