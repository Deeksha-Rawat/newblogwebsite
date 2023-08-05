<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;






class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except((['index']));
    }
    public function index() {
        $posts = Post::latest()->get();
        return view('blogPosts.blog',compact('posts'));
    }

    public function create() {
        return view('blogPosts.create-blog-post');
    }
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body'  => 'required'
        ]);

        $title = $request->input('title');
        $postId = Post::latest()->take(1)->first()->id + 1;
        $slug = Str::slug($title,'-'). '-'. $postId;
        $user_id = Auth::user()->id;
        $body = $request->input('body');
       

        //file upload
       $imagePath =  'storage/' . $request->file('image')->store('postsImages','public');

       $post = new Post();
       $post->title = $title;
       $post->slug = $slug;
       $post->user_id = $user_id;
       $post->body = $body;
       $post->imagePath = $imagePath;
       
       $post->save();

       return redirect()->back()->with('status','Post created successfully');
    
    }
    public function edit(Post $post) {
        if(auth()->user()->id!==$post->user->id){
            abort(403);
        }
        return view('blogPosts.edit-blog-post',compact('post'));
    }

    public function update(Request $request, Post $post) {
        if(auth()->user()->id!==$post->user->id){
            abort(403);
        }
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body'  => 'required'
        ]);

        $title = $request->input('title');
        $postId = Post::latest()->take(1)->first()->id + 1;
        $slug = Str::slug($title,'-'). '-'. $postId;
        $user_id = Auth::user()->id;
        $body = $request->input('body');
       

        //file upload
       $imagePath =  'storage/' . $request->file('image')->store('postsImages','public');

       
       $post->title = $title;
       $post->slug = $slug;
      
       $post->body = $body;
       $post->imagePath = $imagePath;
       
       $post->save();

       return redirect()->back()->with('status','Post edited successfully');
    
    
    }
    // public function show($slug) {
    //     $post = Post::where('slug',$slug)->first();
    //     return view('blogPosts.single-blog-post',compact('post'));
    // }

    //using route model binding
    public function show(Post $post) {
        return view('blogPosts.single-blog-post',compact('post'));
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->back()->with('status','Post deleted successfully');
    }
}
