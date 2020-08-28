<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = \auth()->user()->following()->pluck('profiles.user_id');

        $allusers=User::with('profile')->get();

        $posts=Post::whereIn('user_id',$users)->with('user')->orderByDesc('created_at')->get();
//        $follows = (auth()->user()) ? auth()->user()->following->contains($allusers->id) : false;

//        dd($allusers);

        return view('posts.index',compact('users','posts','allusers'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
//        dd($post);
//        Post::find($post);

        return view('posts.show', compact('post'));
    }

    public function store()
    {
        $data = request()->validate([
            'comment' => 'required',
            'image' => ['required', 'image'],
        ]);
        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'comment' => $data['comment'],
            'image' => $imagePath,
        ]);
        return redirect('/profile/' . auth()->user()->id);
//       Post::create($data+['user_id'=>Auth::id()]);
//        dd(request()->all());
    }
}
