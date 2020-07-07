<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;
use App\Tree;

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
}
