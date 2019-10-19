<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addPostComment(Request $request, Post $post){
        $this->validate($request,[
            'body' => 'required'
        ]);

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;
        $post->comments()->save($comment);

        return back()->with('success','Comment Created');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);

        ///check for correct user
        if(auth()->user()->id != $comment->user_id){
            return back()->with('error', 'unauthorized access');;
        }
        return view('comments.edit')->with('comment', $comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        //create post
        $comment = Comment::find($id);
        $comment->body = $request->input('body');
        $comment->save();

        return redirect('/posts')->with('success', 'Comment Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if($comment->user_id !== auth()->user()->id)
            return back()->with('error', 'Authoriazation Declined!');

        $comment->delete();

        return back()->with('success', 'Deleted');
    }
}
