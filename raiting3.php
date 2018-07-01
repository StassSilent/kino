<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Голосование</title>

    <!-- Bootstrap core CSS -->
    <script src="bootstrap/dist/js/jquery.min.js"></script>	 
	 <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="stlab.css" rel="stylesheet">
  </head>
  <body>
  <div class="container" >
  <?php
  $mysqli = new mysqli("localhost", "root", "", "kino");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$query ="SELECT id_films, name_film FROM films";
$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
if($result)
{
    $result_select = mysqli_query($mysqli, $query);
}?>
	<form action="" method="post">
	<?php
	$p=0;
    while($object = mysqli_fetch_object($result_select)){
        $row = mysqli_fetch_row($result);
        echo "<div class='row'>
   <div class='col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12'>
  <div id='reviewStars-input' class='star'>
  <input id='$p' type='radio' name='$object->id_films'>
    <label title='10' for='star-10'></label>";
    $p=$p+1;
 echo"<input id='$p' type='radio' name='$object->id_films'>
    <label title='9' for='star-9'></label>";
     $p=$p+1;
  echo "<input id='$p' type='radio' name='$object->id_films'>
    <label title='8' for='star-8'></label>";
   $p=$p+1;
 echo  "<input id='$p' type='radio' name='$object->id_films'>
    <label title='7' for='star-7'></label>";
   $p=$p+1;
 echo " <input id='$p' type='radio' name='$object->id_films'>
    <label title='6' for='star-6'></label>";
   $p=$p+1;
  echo "<input id='$p' type='radio' name='$object->id_films'>
    <label title='5' for='star-5'></label>";
     $p=$p+1;
   echo "<input id='$p' type='radio' name='$object->id_films'>
    <label title='4' for='star-4'></label>";
     $p=$p+1;
   echo "<input id='$p' type='radio' name='$object->id_films'>
    <label title='3' for='star-3'></label>";
 $p=$p+1;
  echo"<input id='$p' type='radio' name='$object->id_films'>
    <label title='2' for='star-2'></label>";
 $p=$p+1;
  echo "<input id='$p' type='radio' name='$object->id_films'>
    <label title='1' for='star-1'></label>";
 $p=$p+1;
  echo "<input id='$p' type='radio' name='$object->id_films'>
    <label title='0' for='star-0'></label>";
echo "</div>
</div> 
</div>";
$p=$p++;
//echo $object->id_films;
    } 
?>
</form>


 
  <script src="bootstrap/dist/js/jquery.js"></script>
    <script src="bootstrap3/js/bootstrap.min.js"></script>
     <script src="js/script.js"></script>   
</body>
</html>