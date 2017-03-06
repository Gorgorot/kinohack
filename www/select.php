<?php
//Навигация
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else
{
    $page=1;
}
$kol=5;
$art=($page*$kol)-$kol;
$nameles=[];
$find=$mysqli->query("SELECT Name FROM films WHERE Genr='Боевик' or Genr2='Боевик' or Genr3='Боевик'");
for ($i=1;$i<mysqli_num_rows($find);$i++)
{
    $name=mysqli_fetch_row($find);
    $nameles[$i-1]=$name[0];
}
$count=count($nameles);
$count_page=ceil($count/$kol);
$max=$kol+$art;
if (($max-$count<$kol)&&($max>$count))
{
    $count2=$max-$count;
}
else
{
    $count2=0;
}
for($i=$art;$i<($kol+$art)-$count2;$i++)
{
    echo "<br>$nameles[$i]";
}

for($i=1;$i<=$count_page;$i++)
{
    echo "<br><a href='katalog.php?page=$i'>$i</a><br>";
}
?>