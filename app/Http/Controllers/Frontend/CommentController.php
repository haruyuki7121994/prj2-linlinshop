<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        //dd($request->all());
        $request->validate(['description'=>'required']);
        $comments = new Comment;
        $comments->product_id = $request->product_id;
        $comments->user_id = $request->user_id;
        $comments->description = $request->description;
        $comments->save();
        return back();
    }
}
