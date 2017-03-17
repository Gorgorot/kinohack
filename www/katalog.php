<html>
<head>
<title>Каталог</title>
    <link rel="stylesheet" href="remodal/remodal.css">
    <link rel="stylesheet" href="remodal/remodal-default-theme.css">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/form_styles.css">
    <link rel="icon" href="img/movie.png" type="images/x-icon"/>
    <link rel="stylesheet" type="text/css" href="styles/style_katalog.css">
    <link rel="stylesheet" type="text/css" href="styles/footer1.css">
    <link rel="stylesheet" type="text/css" href="styles/styles_for_select.css" />
</head>
<style>
body {
    margin: 0;
    padding: 0;
    position: relative;
    background-image: url(img/background.png);
}
</style>
<script src="remodal/remodal.min.js"></script>
<body>
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


<div class="content1">
    <div class="continent1">
<form method="post" action="libs/test.php">
    <select name="fancySelect" class="makeMeFancy">
        <option value="0" selected="selected" data-skip="1">Выберите год</option>
    	<option value="1" data-html-text="2017"></option>
    	<option value="2" data-html-text="2016"></option>
        <option value="3" data-html-text="2015"></option>
        <option value="4" data-html-text="2014"></option>
        <option value="4" data-html-text="2013"></option>
        <option value="4" data-html-text="2012"></option>
        <option value="4" data-html-text="2011"></option>
        <option value="4" data-html-text="2010"></option>
        <option value="4" data-html-text="2009"></option>
        <option value="4" data-html-text="2008"></option>
        <option value="4" data-html-text="2007"></option>
        <option value="4" data-html-text="2006"></option>
        <option value="4" data-html-text="Позже 2006"></option>
    </select>
</form>
<h1>Каталог фильмов</h1>
<h3 id="filter">Выбранный фильтр:</h3>
<?php
$name_mass=[];
$image_mass=[];
$des_mass=[];
$genres_mass=[];
$genres2_mass=[];
$genres3_mass=[];
$video_mass=[];
$counter=0;
$result=false;
if(isset($_GET['find_in_genres']))
{
    $find_in_genres=$_GET['find_in_genres'];
}
else
{
    $find_in_genres=false;
}
$mysqli=new mysqli("localhost","root","","films_hack") or die(mysqli_error);

if(isset($_GET['find']))
{
    //echo "Ищем<br>";
    //echo $_GET['request'];
    $request=$_GET['request'];
    $find_name=$mysqli->query("SELECT Name FROM films WHERE Name LIKE '%$request%'");
    if($find_name)
    {
        for($i=1;$i<mysqli_num_rows($find_name)+1;$i++)
        {
            $name=mysqli_fetch_row($find_name);
            if($name)
            {
                $result=true;
                $name_mass[$counter]=$name[0];
                $image_name=$mysqli->query("SELECT Image FROM films WHERE Name='$name[0]'");
                for($j=1;$j<mysqli_num_rows($image_name)+1;$j++)
                {
                    $image=mysqli_fetch_row($image_name);
                }

                $image_mass[$counter]=$image[0];

                $des_name=$mysqli->query("SELECT description FROM films WHERE Name='$name[0]'");
                for($k=1;$k<mysqli_num_rows($des_name)+1;$k++)
                {
                    $des=mysqli_fetch_row($des_name);
                }
                $des_mass[$counter]=$des[0];

                $genres_bd=$mysqli->query("SELECT Genr FROM films WHERE Name='$name[0]'");
                for($k=1;$k<mysqli_num_rows($genres_bd)+1;$k++)
                {
                    $genr=mysqli_fetch_row($genres_bd);
                }
                $genres_bd=$mysqli->query("SELECT Genr2 FROM films WHERE Name='$name[0]'");
                for($k=1;$k<mysqli_num_rows($genres_bd)+1;$k++)
                {
                    $genr2=mysqli_fetch_row($genres_bd);
                }
                $genres_bd=$mysqli->query("SELECT Genr3 FROM films WHERE Name='$name[0]'");
                for($k=1;$k<mysqli_num_rows($genres_bd)+1;$k++)
                {
                    $genr3=mysqli_fetch_row($genres_bd);
                }
                $genres_mass[$counter]=$genr[0];
                $genres2_mass[$counter]=$genr2[0];
                $genres3_mass[$counter]=$genr3[0];

                $video_bd=$mysqli->query("SELECT trailer FROM films WHERE Name='$name[0]'");
                for($k=1;$k<mysqli_num_rows($video_bd)+1;$k++)
                {
                    $video=mysqli_fetch_row($video_bd);
                }
                $video_mass[$counter]=$video[0];
                $counter++;
            }
            else
            {
                echo "<br>По данному запросу ничего не найденно";
            }
        }
    }
    else die(mysqli_error);

}
switch($_GET['genr'])
{
    case 1:
        $genres="Боевик";
        break;
    case 2:
        $genres="Комедия";
        break;
    case 3:
        $genres="Драма";
        break;
    case 4:
        $genres="Мелодрама";
        break;
    case 5:
        $genres="Документальный";
        break;
    case 6:
        $genres="Детектив";
        break;
    case 7:
        $genres="Триллер";
        break;
    case 8:
        $genres="Ужасы";
        break;
    case 9:
        $genres="Криминал";
        break;
    case 10:
        $genres="Биографический";
        break;
    case 11:
        $genres="Военный";
        break;
    case 12:
        $genres="Исторический";
        break;
    default:
        $genres="поиск по запросу - ".$_GET['request'];
        break;
}
if (($_GET['genr']>0)||($_GET['genr']<12))
{

    $find_genr=$mysqli->query("SELECT Name FROM films WHERE Genr='$genres' OR Genr2='$genres' OR Genr3='$genres'");
    for($i=1;$i<mysqli_num_rows($find_genr)+1;$i++)
    {

        $length=count($find_genr);
        $name=mysqli_fetch_row($find_genr);
        if($name)
        {
            $find_in_genres=true;
            $name_mass[$counter]=$name[0];

            $image_name=$mysqli->query("SELECT Image FROM films WHERE Name='$name[0]'");
            for($j=1;$j<mysqli_num_rows($image_name)+1;$j++)
            {
                $image=mysqli_fetch_row($image_name);
            }
            $image_mass[$counter]=$image[0];

            $des_name=$mysqli->query("SELECT description FROM films WHERE Name='$name[0]'");
            for($k=1;$k<mysqli_num_rows($des_name)+1;$k++)
            {
                $des=mysqli_fetch_row($des_name);
            }
            $des_mass[$counter]=$des[0];

            $genres_bd=$mysqli->query("SELECT Genr FROM films WHERE Name='$name[0]'");
            for($k=1;$k<mysqli_num_rows($genres_bd)+1;$k++)
            {
                $genr=mysqli_fetch_row($genres_bd);
            }
            $genres_bd=$mysqli->query("SELECT Genr2 FROM films WHERE Name='$name[0]'");
            for($k=1;$k<mysqli_num_rows($genres_bd)+1;$k++)
            {
                $genr2=mysqli_fetch_row($genres_bd);
            }
            $genres_bd=$mysqli->query("SELECT Genr3 FROM films WHERE Name='$name[0]'");
            for($k=1;$k<mysqli_num_rows($genres_bd)+1;$k++)
            {
                $genr3=mysqli_fetch_row($genres_bd);
            }
            $genres_mass[$counter]=$genr[0];
            $genres2_mass[$counter]=$genr2[0];
            $genres3_mass[$counter]=$genr3[0];

            $video_bd=$mysqli->query("SELECT trailer FROM films WHERE Name='$name[0]'");
            for($k=1;$k<mysqli_num_rows($video_bd)+1;$k++)
            {
                $video=mysqli_fetch_row($video_bd);
            }
            $video_mass[$counter]=$video[0];
            $counter++;
        }
    }
}
if (($result==false)&&($find_in_genres==false))
{
    echo "<h3><img src='img/Cross_Pixabay1.png' width='15' height='15'> По данному запросу ничего не найдено</h3>";
}
else if (($find_in_genres==true)||(isset($_GET['find_in_genres'])))
{
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
    else
    {
        $page=1;
    }
    $kol=2;//количество фильмов
    $art=($page*$kol)-$kol;


    $count_page=ceil($counter/$kol);
    $max=$kol+$art;
    if (($max-$counter<$kol)&&($max>$counter))
    {
        $count2=$max-$counter;
    }
    else
    {
        $count2=0;
    }

    for ($i=$art;$i<($kol+$art)-$count2;$i++)
    {
        echo "<div id='film' style='display:inline-block; float:left;'><img src='img/films/$image_mass[$i]'>
        <label id='title'>$name_mass[$i]</label><br><label><b>Жанры:</b></label> $genres_mass[$i], $genres2_mass[$i], $genres3_mass[$i]<br>
        <label><b>Описание:</b></label><br>$des_mass[$i]<br><br><a href=film.php?film_name=$name_mass[$i]>Смотреть подробнее</a></div>";
    }
    $genr=$_GET['genr'];
    echo "<div class='nav'>";
    if (($page!=1)&&($page>3))
    {
        $page--;
        echo "<a class='arrow' href='katalog.php?page=1&find_in_genres=true&genr=$genr'><<<</a><a class='arrow' href='katalog.php?page=$page&find_in_genres=true&genr=$genr'><</a>";
        $page++;
    }

    /*for($i=1;$i<=$count_page;$i++)
    {
        if ($i==$page)
        {
            echo "<a class='selected' href='katalog.php?page=$i&find_in_genres=true&genr=$genr'>$i</a> ";
        }
        else
        {
            echo "<a class='unselected' href='katalog.php?page=$i&find_in_genres=true&genr=$genr'>$i</a> ";
        }
    }*/
    if($page-2>0)
    {
        if ($page==$count_page)
            echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page-4).">".($page-4)."</a><a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page-3).">".($page-3)."</a>";
        if($page+1==$count_page)
            echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page-3).">".($page-3)."</a>";
        echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page-2).">".($page-2)."</a>";
        $right1=false;
    }
    else $right1=true;

    if($page-1>0)
    {
        echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page-1).">".($page-1)."</a>";
        $right2=false;
    }
    else $right2=true;

    echo "<a class='selected' href='katalog.php?page=find_in_genres=true&genr=$genr&page=$page'>$page</a>";

    if (($page+1<=$count_page)&&($right1==false))
    {
        echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+1).">".($page+1)."</a>";
        if ($page+2<=$count_page)
            echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+2).">".($page+2)."</a>";
    }
    else if($page==2)
    {
        echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+1).">".($page+1)."</a>
               <a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+2).">".($page+2)."</a>
               <a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+3).">".($page+3)."</a>";
    }
    else if ($page+1<=$count_page)
    {
        echo "<a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+1).">".($page+1)."</a>
               <a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+2).">".($page+2)."</a>
               <a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+3).">".($page+3)."</a>
               <a class='unselected' href=katalog.php?find_in_genres=true&genr=$genr&page=".($page+4).">".($page+4)."</a>";
               $next=false;
    }

    if (($page!=$count_page)&&($page<($count_page-2)))
    {
        $page++;
        echo "<a class='arrow' href='katalog.php?page=$page&find_in_genres=true&genr=$genr'>></a><a class='arrow' href='katalog.php?page=$count_page&find_in_genres=true&genr=$genr'>>>></a>";
        $page--;
    }
    echo "</div>";

}

else if($result==true)
{
    for ($i=0;$i<$counter;$i++)
    {
        echo "<div id='film' style='display:inline-block; float:left;'><img src='img/films/$image_mass[$i]'><label id='title'>$name_mass[$i]</label><br><label><b>Жанры:</b></label> $genres_mass[$i], $genres2_mass[$i], $genres3_mass[$i]<br><label><b>Описание:</b></label><br>$des_mass[$i]<br><button class='watch'>Смотреть трейлер</button><br>
        <iframe src='$video_mass[$i]'></iframe>
        </div>";
    }
}

?>

        </div>
    <div class="saidbar1">
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
    <div class="licensed">
        <p>© kinohack corporation. All right reserve. 2017</p>
    </div>
</footer>
</body>
<script>
var genr="<?php echo $genres;?>";
console.log((genr));
if (typeof(genr)!="number")
{
    document.getElementById('filter').innerHTML+=" "+genr;
}
</script>

<script src="remodal/remodal.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>
