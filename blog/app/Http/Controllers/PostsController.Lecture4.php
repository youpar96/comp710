<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// week 4
use App\Post;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
	    return view('posts/welcome', compact('posts'));
    }
    
    // Route::get('/posts/create')
    public function create(){
        return view('posts.create');
    }
    
    // Route::post('/posts')
    public function store(){
        /*
        request()->all();
        // To use illuminate add: use Illuminate\Http\Request; at the top
        // dd(request()->all()); if using illuminate
        request('title'); //return only title
        request(['title','body']); //return only title and body */
        
        //Create a new post using request data
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        
        // we may replace the codes above with the codes below
        // Post::create([
        //     'title'=>request('title'),
        //     'body'=>request('body')
        // ]);
        
        //Save the data into the database
        $post->save();
        
        //Redirect to the home page
        //return redirect('posts.welcome');
        
        // $this->validate(request(),[
        //     //Validation rules
        //     'title' => 'required|min:3|max:10',
        //     'body' => 'required'
        // ]);
        // Post::create(request(['title', 'body']));
        // return redirect('/blog/public/posts/create');

    }
    
    // Route::get('/posts/id')
    public function show($id){
        return view('posts.show');
    }
    
    public function edit($id){
        
    }
    
    public function update($id){
        
    }
    
    public function delete($id){
        
    }
}
?>