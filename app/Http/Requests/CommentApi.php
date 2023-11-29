<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentApi extends Controller
{
    //



    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function index()
    {
        // Retorna todos los comentarios
        return $this->comment->all();
    }

    public function show(Comment $comment)
    {
        // Retorna un comentario específico por su ID
        return $comment;
    }

    public function store(Request $request)
    {
        // Crea un nuevo comentario
        return $this->comment->create($request->all());
    }

    public function update(Request $request, Comment $comment)
    {
        // Actualiza un comentario existente
        $comment->update($request->all());
        return $comment;
    }

    public function destroy(Comment $comment)
    {
        // Elimina un comentario
        $comment->delete();
        return response()->json(null, 204);
    }
}
