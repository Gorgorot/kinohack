<?php
session_start();
if(isset($_SESSION['reg_sucssess']))
{
    unset($_SESSION['reg_sucssess']);
}
?>
<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" href="remodal/remodal.css">
    <link rel="stylesheet" href="remodal/remodal-default-theme.css">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/form_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/footer1.css">
    <link rel="stylesheet" type="text/css" href="styles/content_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/button.css">
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
    <script src="remodal/remodal.min.js"></script>
    <header>
        <div class="header">
            <ul class="but-cont">
                <li><a class="header-navigation" href="main_1.php">Главная</a></li>
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
            <div class="personal">
                <a id="auto" href="libs/autorize.php">Авторизация/</a><a id="reg" href="libs/signup2.php">Регистрация</a>
                <a id="user" style="display: none;"></a><a id="exit" style="display: none;" href="libs/logout.php">/Выйти</a>
            </div>
        <script type="text/javascript">
        var autorize="<?php echo $_SESSION['yes_enter']; ?>";
        console.log(autorize);
        if (autorize=="1")
        {
            document.getElementById('user').style.display="inline-block";
            document.getElementById('user').innerHTML="<?php echo $_SESSION['inform'].$_SESSION['login'];
                                                             unset($_SESSION['inform']); ?>"
            document.getElementById('auto').style.display="none";
            document.getElementById('reg').style.display="none";
            document.getElementById('exit').style.display="inline-block";
        }
        else
        {
        
        }
        </script>   
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
              <h3>Описание:</h3>Исчерпавший свою удачу капитан Джек Воробей обнаруживает, что за ним охотится его старый неприятель, ужасный капитан Салазар и его призрачные пираты. Они только что сбежали из Дьявольского треугольника и намерены уничтожить всех пиратов, включая Джека. Поможет спастись лишь могущественный артефакт — трезубец Посейдона, который дарует своему обладателю полный контроль над морями...
            </div>
            <a class="button" href="#modal1" role="button">Смотреть трейлер</a>
            <div class="remodal" data-remodal-id="modal1">
              <button data-remodal-action="close" class="remodal-close"></button>
               <iframe width="600" height="400" src="https://www.youtube.com/embed/0e71Y_3-dQs?rel=0" frameborder="0" allowfullscreen></iframe>
              <br>
            </div>
          </li>
          <li class="slide1">
            <div class="title"><h1 class="title1">Стражи галлактики 2</h1></div>
            <div class="foto">
              <img src="img/films/2.jpg" class="foto1">
              <img src="img/films/2_1.jpg" class="foto2">
            </div>
            <div class="description">
              <h3>Описание:</h3>Все в сборе: землянин Питер Квилл (Звездный Лорд), молчаливый громила Дракс, зеленокожая наемница Гамора, живое дерево Грут и говорящий енот. Герои не изменяют себе и с завидной регулярностью продолжают попадать в немыслимые ситуации, выпутываясь из них почти без ущерба (а иногда даже с пользой) для окружающих. На этот раз им предстоит раскрыть одну из самых главных тайн во всей Галактике: кто же на самом деле отец Питера Квилла?
            </div>
            <a class="button" href="#modal2" role="button">Смотреть трейлер</a>
            <div class="remodal" data-remodal-id="modal2">
              <button data-remodal-action="close" class="remodal-close"></button>
                <iframe width="600" height="400" src="https://www.youtube.com/embed/Ys3mXt3WqMA?rel=0" frameborder="0" allowfullscreen></iframe>
              <br>
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
            <a class="button" href="#modal3" role="button">Смотреть трейлер</a>
            <div class="remodal" data-remodal-id="modal3">
              <button data-remodal-action="close" class="remodal-close"></button>
              <iframe width="600" height="400" src="https://www.youtube.com/embed/7grBXpEVDm4" frameborder="0" allowfullscreen></iframe>
              <br>
            </div>
          </li>
          <li class="slide1">
            <div class="title"><h1 class="title1">Меч короля артура</h1></div>
            <div class="foto">
              <img src="img/films/4.jpg" class="foto1">
              <img src="img/films/4_1.jpg" class="foto2">
            </div>
            <div class="description">
              <h3>Описание:</h3>Молодой Артур околачивается на окраинах Лондиниума со своей бандой. Своим происхождением он совершенно не дорожит и не интересуется. Так он живёт до момента, когда судьба сводит его с волшебным мечом Экскалибуром. После этого Артур кардинально меняется — влюбляется, присоединяется к движению сопротивления и объединяет вокруг себя людей, чтобы свергнуть тирана Вортигерна, убившего родителей Артура и захватившего трон.
            </div>
            <a class="button" href="#modal4" role="button">Смотреть трейлер</a>
            <div class="remodal" data-remodal-id="modal4">
              <button data-remodal-action="close" class="remodal-close"></button>
              <iframe width="600" height="400" src="https://www.youtube.com/embed/KCgtQUb03GA?rel=0" frameborder="0" allowfullscreen></iframe>
              <br>
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
