<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>

    <link rel="stylesheet" href={{ asset("css/style.css") }}>


</head>


<div class="line3">
    <div>
        <ul class="">
            <li><a class="text_menu2" href="#">Новости</a></li>
            <li><a class="text_menu2" href="#">Добавить тему</a></li>
            <li><a class="text_menu2" href="">Показать всё</a></li>
            <li><a class="text_menu2" href="#">Регистрация</a></li>

        </ul>
    </div>
</div>
<div class="authorisation">
    <form name="feedback" method="post" action="Autorisation.php">
        <label class="text_label">Имя <input type="text" name="user" class="text_login" ></label>
        <label class="text_label">Пароль <input type="password" name="password"></label>
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
    <div class="line1">
        <div class="number_theme">1</div>
        <div class="name_theme" ><a class="href_theme" href="#">Проблемы голбального потепления</a></div>
        <div class="view_theme">0</div>
        <div class="comments_theme">0</div>
    </div>
    <div class="line1">
        <div class="number_theme">1</div>
        <div class="name_theme"><a class="href_theme" href="#"></a>Основная экзистенциальная дихотомия.Как не спиться</div>
        <div class="view_theme">0</div>
        <div class="comments_theme">0</div>
    </div>
    <div class="line1">
        <div class="number_theme">1</div>
        <div class="name_theme"><a class="href_theme" href="#">Обложат ли куртизанок налогом</a></div>
        <div class="view_theme">0</div>
        <div class="comments_theme">0</div>
    </div>
    <div class="line1">
        <div class="number_theme">1</div>
        <div class="name_theme"><a class="href_theme" href="#">10 доказательств того,что мы живем в матрице</a></div>
        <div class="view_theme">0</div>
        <div class="comments_theme">0</div>
    </div>
    <div class="line1">
        <div class="number_theme">1</div>
        <div class="name_theme"><a class="href_theme" href="#">SkyNet.Как скоро кожаный мешок его создат</a></div>
        <div class="view_theme">0</div>
        <div class="comments_theme">0</div>
    </div>
</div>



<body>


</body>
</html>
