<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
  public function theme(){
      // добавление новой темы, переадресация на страницу созадния темы
  }
  public function addTheme(){
      // добавление новой темы в бд
  }
  public function postTheme(){
      // добавление новой темы непосредственно на форум (метод только для админа)
  }
  public function showTheme(){
      //      отображение темы на страницу с комментариями
  }
  public function comment(){
      // добавление нового комментария
  }
  public function addComment(){
      // запись комментария в бд
  }
  public function countView(){
      // счётчик просмотров
  }
}
