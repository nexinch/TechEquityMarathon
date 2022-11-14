<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Reply;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['create']);
    }

    public function index()
    {
        $comments = Comment::where('valid', 0)->orderBy('created_at', 'desc')->get();
        return view('admin.news.comments', compact('comments'));
    }

    public function create(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'comment' => 'nullable',
        ]);

        $comment = Comment::create($data);

        $comment->update([
            'blog_id' => $id
        ]);

        if (Auth::check()) {
            $comment->update([
                'user_id' => Auth::id(),
                'valid' => 1
            ]);
        }

        Toastr::success('Your Comment Has been Posted for Review', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function validateComment(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update([
            'valid' => 1
        ]);
        
        Toastr::success('Comment Validated', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        // dd($comment);
        foreach ($comment->replies as $reply) {
            $reply->delete();
        }
        $comment->delete();

        Toastr::success('Comment Deleted', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function reply(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required',
        ]);

        $reply = Reply::create([
            'comment_id' => $id,
            'reply' => $request->reply,
            'user_id' => Auth::id()
        ]);

        Toastr::success('Replied', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function deleteReply($id)
    {
        $reply = Reply::findOrFail($id);
        $reply->delete();
        Toastr::success('Reply Deleted', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
