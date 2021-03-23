<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function store(Post $post){

        request()->validate([
            'content' => 'required|min:5'
        ]);

        $comment = new Comment();

        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;

        $post->comments()->save($comment);

        return redirect()->route('blog.show', $post);
    }

    public function storeCommentReply(Comment $comment){

        request()->validate([
            'replyComment' => 'required|min:3'
        ]);

        $commentReply = new Comment();
        $commentReply->content = request('replyComment');
        $commentReply->user_id = auth()->user()->id;

        $comment->comments()->save($commentReply);

        return redirect()->back();

    }
}
