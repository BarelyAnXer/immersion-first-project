<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PostsController extends Controller
{

    public function index()
    {
        //asc =ascending ,desc = descending
        $posts = Post::orderBy('id','asc')->paginate(2);
        
        return view('posts.index')->with('posts', $posts);

        

        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        
        // // return view('posts.index')->with('posts', $this->paginate($user->posts));
        // return $user->posts;

        
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'createdby' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){

            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);

        }
        else{
            $filenameToStore = 'noImage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->createdby = $request->input('createdby');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $filenameToStore;
        $post->save();

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('posts.index')->with('posts', $this->paginate($user->posts))->with('success', 'Notes Created');

        // return redirect('/posts')->with('success', 'Post Created');
    }

    public function show($id)
    {   
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);

    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'createdby' => 'required',
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){

            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);

        }

        // if ($request->hasFile('cover_image')) {
        //     Storage::delete('public/cover_images/' . $post->cover_image);
        //     $post->cover_image = $filenameToStore;
        // } //deleteing file after updating but it also deletes the noImage.jpg
        

        // Create Post
        
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->createdby = $request->input('createdby');
        if($request->hasFile('cover_image')){
            $post->cover_image = $filenameToStore;
        }

        $post->save();

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('posts.index')->with('posts', $this->paginate($user->posts))->with('success', 'Notes Updated');

        // return redirect('/posts')->with('success', 'Post Updated');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();            
     
        if($post->cover_image != 'noImage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('posts.index')->with('posts', $this->paginate($user->posts))->with('success', 'Notes Deleted');
    }

    public function paginate($items, $perPage = 20, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
