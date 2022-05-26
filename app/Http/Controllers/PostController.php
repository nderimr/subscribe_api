<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Website;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::orderBy('created_at','DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $newPost = new Post;
        $newPost->title = $request['title'];
        $newPost->content = $request['content'];
        $newPost->description = $request["description"];
        $newPost->save();
        $newPost->websites()->attach($request['website_id']);
        $website = Website::find($id);
        foreach($website->users() as $user)
         {  ///user send email to be implemented 
             //$user->sendEmail($newPost->title,$newPost->content);
         }
        return $newPost;
    }

    
}
