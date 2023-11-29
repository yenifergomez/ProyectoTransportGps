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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
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

    return view('contenido.foro', ['comments' => $comments]);

}





//TRAER COMENTARIOS EDITAR+ELIMINAR

public function indexComment() {
    $comentarios = Comment::all();
    return view('layouts.adforo', compact('comentarios'));
}

public function edit($id) {
    $comment = Comment::findOrFail($id);
    return view('layouts.adforo', ['comment' => $comment]);
}


public function update(Request $request, $id) {
    $comentario = Comment::findOrFail($id);
    $comentario->nombre = $request->input('nombre');
    $comentario->comentario = $request->input('comentario');
    
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/images');
        $comentario->imagen = str_replace('public/', '', $imagePath);
    }
    
    $comentario->save();
    
    return redirect()->route('layouts.adforo')->with('success', 'Comentario actualizado correctamente');
}

// public function showCommentForm($commentId) {
//     $comment = Comment::find($commentId); 
//     return view('your_blade_template', compact('comment'));
// }


}
