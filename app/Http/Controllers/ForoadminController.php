<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;


class ForoadminController extends Controller{


    public function index() {
        $comments = Comment::all();
        return view('admin.adforo', ['comments' => $comments]);
    }
    

    public function editComment($id) {
        $comment = Comment::find($id); 
        if (!$comment) {
            return redirect()->back()->with('error', 'Comentario no encontrado.');
        }
        return view('admin.editar_comentario', compact('comment'));
    }

    public function updateComment(Request $request, $id) {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->back()->with('error', 'Comentario no encontrado.');
        }

        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'comment' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validación para la imagen
        ]);

        $comment->name = $validatedData['name'];
        $comment->comment = $validatedData['comment'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $comment->image = $imageName;
        }

        $comment->save();
        return redirect()->route('admin.adforo')->with('success', 'Comentario actualizado correctamente.');
    }

    public function deleteComment($id) {
        $comment = Comment::find($id);
        if (!$comment) {
            return redirect()->back()->with('error', 'Comentario no encontrado.');
        }

        $comment->delete();
        return redirect()->route('admin.adforo')->with('success', 'Comentario eliminado correctamente.');
    }


}
