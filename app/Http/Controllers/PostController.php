<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
     
    public function index()
    {
       return view('post');
    }
    public function createPost(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->save();
        return response()->json([
            'message' => 'New post created'
        ]);
    }
}