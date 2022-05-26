<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Website;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::orderBy('created_at','DESC')->get();
    }

   

    public function subscribe(Request $request)
    {
        
        $user_id = $request['user_id'];
        $website_id = $request['website_id'];
        $existingUser = User::find($user_id);
        if($existingUser)
        {
            $existingWebsite = Website::find($website_id);
            if($existingWebsite)
            {
                $existingUser->websites()->attach($website_id);
            }
        }
       
    }
}
