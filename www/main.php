<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/form_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/footer1.css">
    <link rel="stylesheet" type="text/css" href="styles/content_styles.css">
    <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
    <link rel="icon" href="img/movie.png" type="images/x-icon"/>
    <title>Главная</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="jquery.bxslider/jquery.bxslider.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        position: relative;
        background-image: url(img/background.png);
    }
</style>

<body>
    <script>
        jQuery(document).ready(function() {
            $('.bxslider').bxSlider({
                auto: true,
                autoHover: true,
                pause:10000,
                speed: 1000,
                controls: false
            });
        });
    </script>
    <header>
        <div class="header">
            <ul class="but-cont">
                <li><a href="main_1.php">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Страница 3</a></li>
            </ul>
            <form class="form-wrapper cf" action="katalog.php" method="GET">
                <input name="request" type="text" placeholder="Введите название фильма, который хотите найти" required/>
                <input class="find" id="finder" type="submit" name="find" value="Найти"/> 
            </form>
            <div class="img-cont">
                <a href=#><img src="img/youtube.png" width="32px"></a>
                <a href=#><img src="img/twitter.png" width="32px"></a>
                <a href=#><img src="img/facebook.png" width="32px"></a>
                <a href=#><img src="img/email.png" width="32px"></a>
            </div>
        </div>
    </header>
    <div class="head">kinohack</div>
    <div class="menu1">
        <ul class="menu2">
            <li class="navigation"><a href="#">НОВОСТИ</a></li>
            <li class="navigation"><a href="#">НОВИНКИ</a></li>
            <li class="navigation"><a href="#">НА ВЕЧЕР</a></li>
            <li class="genres"><a href="#">ЖАНРЫ</a>
                <ul class="drop-menu">
                    <li><a href="#">Боевик</a></li>
                    <li><a href="#">Комедия</a></li>
                    <li><a href="#">Драма</a></li>
                    <li><a href="#">Мелодрама</a></li>
                    <li><a href="#">Документальный</a></li>
                    <li><a href="#">Детектив</a></li>
                    <li><a href="#">Триллер</a></li>
                    <li><a href="#">Ужасы</a></li>
                    <li><a href="#">Криминал</a></li>
                    <li><a href="#">Биографический</a></li>
                    <li><a href="#">Военный</a></li>
                    <li><a href="#">Исторический</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
      <div class="continent">
        <ul class="bxslider">
          <li class="slide1">
            <div class="title"><h1 class="title1">Пираты Карибского моря: Мертвецы не рассказывают сказок.</h1></div>
            <div class="foto">
              <img src="img/films/5.jpg" class="foto1">
              <img src="img/films/5_1.jpg" class="foto2">
            </div>
            <div class="description">
              <h3>Описание:</h3>Все в сборе: землянин Питер Квилл (Звездный Лорд), молчаливый громила Дракс, зеленокожая наемница Гамора, живое дерево Грут и говорящий енот. Герои не изменяют себе и с завидной регулярностью продолжают попадать в немыслимые ситуации, выпутываясь из них почти без ущерба (а иногда даже с пользой) для окружающих. На этот раз им предстоит раскрыть одну из самых главных тайн во всей Галактике: кто же на самом деле отец Питера Квилла?
            </div>
          </li>
          <li class="slide1">
            <div class="title"><h1 class="title1">Стражи галлактики 2</h1></div>
            <div class="foto">
              <img src="img/films/2.jpg" class="foto1">
              <img src="img/films/2_1.jpg" class="foto2">
            </div>
            <div class="description">
              <h3>Описание:</h3>Исчерпавший свою удачу капитан Джек Воробей обнаруживает, что за ним охотится его старый неприятель, ужасный капитан Салазар и его призрачные пираты. Они только что сбежали из Дьявольского треугольника и намерены уничтожить всех пиратов, включая Джека. Поможет спастись лишь могущественный артефакт — трезубец Посейдона, который дарует своему обладателю полный контроль над морями...
            </div>
          </li>
          <li class="slide1">
            <div class="title"><h1 class="title1">Логан</h1></div>
            <div class="foto">
              <img src="img/films/3.jpg" class="foto1">
              <img src="img/films/3_1.jpg" class="foto2">
            </div>
            <div class="description">
              <h3>Описание:</h3>В недалеком будущем уставший от жизни Логан заботится о больном профессоре Икс, который прячется неподалеку от мексиканской границы. Но Логан больше не сможет скрывать свое прошлое, когда встретится с юным мутантом, которого преследуют темные силы.
            </div>
          </li>
          <li class="slide1">
            <div class="title"><h1 class="title1">Меч короля артура</h1></div>
            <div class="foto">
              <img src="img/films/4.jpg" class="foto1">
              <img src="img/films/4_1.jpg" class="foto2">
            </div>
            <div class="description">
              <h3>Описание:</h3>В недалеком будущем уставший от жизни Логан заботится о больном профессоре Икс, который прячется неподалеку от мексиканской границы. Но Логан больше не сможет скрывать свое прошлое, когда встретится с юным мутантом, которого преследуют темные силы.
            </div>
          </li>
        </ul>
      </div>
      <div class="saidbar">
        <span style="margin-left:10px;font-size:35px;">Жанры:</span>
        <ul class="side">
            <li><a href="katalog.php?genr=1">Боевик</a></li>
            <li><a href="katalog.php?genr=2">Комедия</a></li>
            <li><a href="katalog.php?genr=3">Драма</a></li>
            <li><a href="katalog.php?genr=4">Мелодрама</a></li>
            <li><a href="katalog.php?genr=5">Документальный</a></li>
            <li><a href="katalog.php?genr=6">Детектив</a></li>
            <li><a href="katalog.php?genr=7">Триллер</a></li>
            <li><a href="katalog.php?genr=8">Ужасы</a></li>
            <li><a href="katalog.php?genr=9">Криминал</a></li>
            <li><a href="katalog.php?genr=10">Биографический</a></li>
            <li><a href="katalog.php?genr=11">Военный</a></li>
            <li><a href="katalog.php?genr=12">Исторический</a></li>
        </ul>
      </div>
    </div>

    <footer>
        <div class="company">
            <p>kinohack - интернет портал, созданный для удобного поиска фильмов на вечер и не только.</p>
        </div>
        <div class="company">
            <p>Ищете нас в социальных сетях:<br><a class="socials1" href="#">Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="socials1" href="#">Youtube</a><br><a class="socials1" href="#">Twitter</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="socials1" href="#">VKontakte</a></p>
        </div>
<!--
        <div class="socials">
            <p>Ищете нас в социальных сетях:<br><a class="socials1" href="#">Facebook</a><br><a class="socials1" href="#">Youtube</a><br><a class="socials1" href="#">Twitter</a><br><a class="socials1" href="#">VKontakte</a></p>
        </div>
-->
        <div class="licensed">
            <p>© kinohack corporation. All right reserve. 2017</p>
        </div>
    </footer>
</body>

</html>
