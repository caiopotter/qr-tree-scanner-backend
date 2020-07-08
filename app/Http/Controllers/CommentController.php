<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addTreeComment(Request $request){
        $commentData = ([
            'user_id' => $request->user_id,
            'tree_id' => $request->tree_id,
            'text' => $request->text,
        ]);
        $comment = Comment::create($commentData);
        
        return $comment;
    }

    public function deleteTreeComment($comment){
        Comment::destroy($comment);
        return response()->json('deletado com sucesso', 200);
    }
}
