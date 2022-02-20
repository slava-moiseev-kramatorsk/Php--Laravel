<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href={{ asset("css/style_registration.css") }}>
</head>
<body>
<div class="form_reg">
    <div><p class="title_ger">Добавьте новую тему</p></div>
</div>
<div>
    {{$errors}}
    <form class="form_style" name="feedback" method="POST" action="{{route('create_theme')}}">
        @csrf
        <div><label class="title_ger">Название темы </label></div>
        <input type="text" name="name">
        <div><label class="title_ger">Содержание</label></div>
        <textarea type="text" name="content"></textarea>



        <div><label class="title_ger"><input type="submit" name="pub" value="Отправить"></label></div>
    </form>
</div>
</body>
</html>
