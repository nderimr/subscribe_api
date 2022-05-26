<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
class WebsiteController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Website::orderBy('created_at','DESC')->get();
    }

    
}
