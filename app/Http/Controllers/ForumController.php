<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForumRequest;
use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ForumController extends Controller
{
    public function addTheme(){
//        dd(1);
        return view('addNewTheme');
    }
  public function create(ForumRequest $req){
//      dd(2);
    $forum = new Forum();
    $forum->name = $req->input('name');
    $forum->content = $req->input('content');
    $forum->save();
      return redirect()->route('index');
  }
  public function edit($id){
//      abort(500);
//      dd(3);
        $forum =Forum::find($id);
        return view('editForum',['forum' => $forum]);
  }

    public function update($id, ForumRequest $request){
//        abort(404);
//        dd($id);
        $data = $request->except('_token', '_method');
        $forum = Forum::find($id);
        $forum->update($data);
        return redirect()->route('index');
    }

  public function index(){
//      dd(4);
      $forums = Forum::all();
      return view('welcome',['forums' => $forums]);


  }
  public function show($id){
//      dd(15);
      $forum = Forum::find($id);
      $comment = Comment::all();
      return view('show',['forum' => $forum, 'comment' => $comment]);

  }
  public function destroy($id){
        $forum = Forum::find($id);
        $forum->delete();
      return redirect()->route('index');

  }

}
