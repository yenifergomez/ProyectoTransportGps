<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CommentController extends Controller
{
    //
    public function store(Request $request, Post $post)
{
    $request->validate([
        'body' => 'required',
    ]);

 
    if (!$post) {
        abort(404); 
    }

    $comment = new Comment();
    $comment->body = $request->body;
    $comment->user_id = Auth::id();
    $comment->post_id = $post->id;
    $comment->save();

    return redirect()->back()->with('success', 'Comment posted successfully!');
}

public function show($postId) {
    $post = Post::find($postId);

    if (!$post) {
        
        abort(404);
    }

   

    return view('contenido.foro')->with('post', $post);

}



public function destroy(Comment $comment)
{
    $this->authorize('delete', $comment);

    $comment->delete();

    return redirect()->back()->with('success', 'Comment deleted successfully!');
}

}
