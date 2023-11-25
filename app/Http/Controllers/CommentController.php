<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CommentController extends Controller
{
    //


    public function foroWeb(){
        return view('contenido.foro');
    }

    public function index()
    {
        $comments = Comment::all();
        return view('contenido.foro', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Ajusta según tus necesidades
        ]);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $comment->image = $imageName;
        }

        $comment->save();

        return redirect()->route('comments.index')->with('success', 'Comment created successfully!');
    }


    public function vista()
{
    $comments = Comment::all();
    //return view('contenido.foro', compact('comments'));

    return view('contenido.foro', ['comments' => $comments]);

}



}
