<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $comment = Comment::with('user')->with('blog')->paginate(4);
        return view('admin.comment.index', compact('comment'));
    }

    public function edit($id)
    {

        $comment = Comment::FindOrFail($id);
        return view('admin.comment.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::FindOrFail($id);
        $comment->update([
            'status' => $request->status
        ]);

        return redirect()->route('comment.index');
    }

    public function show($id){

    }

    public function destroy($id){
        $comment = Comment::FindOrFail($id);
        $comment->destroy($id);
        return redirect()->route('comment.index');
    }
}
