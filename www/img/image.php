<?php
$mysqli=new mysqli("localhost","root","","films_hack") or die(mysqli_error);
$image_name=$mysqli->query("SELECT Image FROM films WHERE Name='$Name'");
for($i=1;$i<mysqli_num_rows($image_name)+1;$i++)
{
    $image=mysqli_fetch_row($image_name);
    echo $image[0];       
}
?>