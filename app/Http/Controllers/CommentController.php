<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {

        if (!auth()->user()) {
            return redirect()
            ->route('login')
            ->with('status', 'Login prima di commentare!');
        }
        // Validate data passed by user

        $this->validate($request, [
            'body' => 'required',
        ]);
        // Save data on Comment table

        $post = Post::findOrFail($id);

        $commentData['post_id'] = $post->id;
        $commentData['user_id'] = $request->user()->id;
        $commentData['body'] = $request->body;

        $comment = Comment::make($commentData);
            
        $post->comments()->save($comment);
        
        // Return redirect->back()
        return back();
    }
}
