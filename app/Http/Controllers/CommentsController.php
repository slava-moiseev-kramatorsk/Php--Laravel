<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(Request $requestq){
        $comment = new Comment();
        $comment->name = '?????????';
        $comment->comment = $requestq->input('comment');
        $comment->save();
    }


}
