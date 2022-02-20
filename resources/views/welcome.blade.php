<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>

    <link rel="stylesheet" href={{ asset("css/style.css") }}>


</head>

<body>

<div class="line3">
    <div>
        <ul class="">
            <li><a class="text_menu2" href="#">Новости</a></li>
            <li><a class="text_menu2" href="{{route('addTheme')}}">Добавить тему</a></li>
            <li><a class="text_menu2" href="{{route('registration')}}">Регистрация</a></li>

        </ul>
    </div>
</div>
<div class="authorisation">
    <form name="feedback" method="get" action="">
        <label class="text_label">Имя <input type="text" name="user_name" class="text_login" ></label>
        <label class="text_label">Пароль <input type="password" name="password"></label>
        <label class="text_label">email <input type="text" name="email"></label>
        <label class="text_label">Запомнитьменя<input type="checkbox"  name="checkbox" value=""></label>
        <input type="submit" value="Войти">
    </form>
</div>

<div class="container">
    <div class="title_column">
        <div class="title_number">Номер</div>
        <div class="title_name">Название темы</div>
        <div class="title_view">Просмотры</div>
        <div class="title_view">Комментарии</div>
    </div>
    @foreach($forums as $forum)
        <div class="line1">

            <div class="number_theme">{{$forum->id}}</div>
            <div class="name_theme" ><a class="href_theme" href="{{ route('show', ['forum' => $forum->id]) }}">{{$forum->name}}</a></div>

            <div class="view_theme">0</div>
            <div class="comments_theme">0</div>
        </div>
@endforeach

</body>
</html>
