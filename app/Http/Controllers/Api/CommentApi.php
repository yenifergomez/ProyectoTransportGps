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
        return $this->comment->all();
    }

    public function show(Comment $comment)
    {
        return $comment;
    }

    public function store(Request $request)
    {
        return $this->comment->create($request->all());
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}