<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ForumController extends Controller
{
    public function addTheme(){
        return view('addNewTheme');
    }
  public function create(Request $req){
    $forum = new Forum();
    $forum->name = $req->input('theme_name');
    $forum->content = $req->input('content');
    $forum->save();
    return view('welcome');
  }
  public function update(){

  }
  public function post(){

  }
//  public function show(){
//      $forum = Forum::find('name');
//      return view('forums.show', ['forum'=>$forum]);
//  }
  public function delete(){

  }

}
