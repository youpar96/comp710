<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index(){
        return view('posts/welcome');
    }
    
    public function viewallposts(){
        return view('posts/viewallposts', compact('posts'));
    }
    
    public function create(){
        return view('posts/create');
    }
    
    public function store(){
        // Lab3: Title and body are required fields
        if(validate(request(),[
            //Validation rules
            'title'=>'required|min:3|max:10',
            'body'=>'required'
        ])){
           $msg = "Validation Error";
           return redirect('posts/create')->with('error', $msg);
        }


        // You can view all records in $request by simply displaying using: echo $request;
        //Create a new post using request data
        $post = new Post;
        $post->title = $request->post('title');
        $post->body = $request->post('body');

        //Save it to the database
        //$post->save();
        $post->up();

        //Redirect to viewallposts page with success message
        $msg = 'Successfully added new post!';

        return redirect('posts/viewallposts')->with('status', $msg);
    }
    
    public function viewpost(){
        
    }
    
    public function logout (Auth $Auth) {
        //logout user
        auth()->logout();
        
        // redirect to homepage
        return view('posts/welcome');
    }
}
