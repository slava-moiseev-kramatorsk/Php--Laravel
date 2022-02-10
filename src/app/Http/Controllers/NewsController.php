<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showNews(){
        return view('News');        // создать страницу отображения новостей
    }

    public function AddNews(){
        return view('AddNews');     // создать страницу добавления новостей (для админа)
    }
}
