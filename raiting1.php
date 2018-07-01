<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Голосование</title>

    <!-- Bootstrap core CSS -->
     <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="bootstrap/dist/js/jquery.js"></script>
<link href="stlab.css" rel="stylesheet">
  </head>
  <body>
  <div class="container" >
  
  <?php
  $mysqli = new mysqli("localhost", "root", "", "kino");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$val=$_GET['value']; 
$query ="SELECT id_users, name FROM users WHERE id_users=$val";
$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
if($result)
{
    $result_select = mysqli_query($mysqli, $query);
    $object = mysqli_fetch_object($result_select);
    $user=$object->name;
    $id_us=$object->id_users;
    
    
}

 	 echo '<h2 align = "center">Hello! '. $user.'</h2>';
 	  echo "<h3 align= 'center'> ".$user. ", select the raiting.</h3>";
	
echo '<div class="row" >
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<a href="kino27.php" class="btn btn-dark my-2">Home</a>
</div>
</div>';
	
$query1 ="SELECT * FROM films";
$result1 = mysqli_query($mysqli, $query1) or die("Ошибка " . mysqli_error($mysqli)); 
if($result)
{
    $result_select1 = mysqli_query($mysqli, $query1);
}
	echo '<form action="" method="post">';
	$user=$object->name;
   while($object1 = mysqli_fetch_object($result_select1)){
        $t=$object1->id_films;
        $m=$object1->name_film;
        $im=$object1->img;
        echo '<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12" align="right">';
    echo $m;
   echo'<br>';
    echo $im;
    echo '</div>';
  echo '<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 pd" margin="center">
  <div id="reviewStars-input" align="center" class="star mt-90">
  
  <input id="10+'.$t.'" value="10" type="radio" name='. $t .'>
    <label title="10" for="10+'.$t.'"></label>
    
  <input id="9+'.$t.'" type="radio" class="star" value="9" name='. $t.'>
    <label title="9" for="9+'.$t.'"></label>
    
 <input id="8+'.$t.'" value="8" type="radio" class="star" name='. $t.'>
    <label title="8" for="8+'.$t.'"></label>
    
  <input id="7+'.$t.'" type="radio" class="star" value="7" name='.$t.'>
    <label title="7" for="7+'.$t.'"></label>
  
  <input id="6+'.$t.'" type="radio" class="star" value="6" name='. $t.'>
    <label title="6" for="6+'.$t.'"></label>
    
 <input id="5+'.$t.'" type="radio" class="star" value="5" name='. $t .'>
    <label title="5" for="5+'.$t.'"></label>
  
 <input id="4+'.$t.'" type="radio" class="star" value="4" name='. $t .'>
    <label title="4" for="4+'.$t.'"></label>
    
   <input id="3+'.$t.'" type="radio" class="star" value="3" name='.  $t  .'>
    <label title="3" for="3+'.$t.'"></label>

  <input id="2+'.$t.'" type="radio" class="star" value="2" name='.  $t  .'>
    <label title="2" for="2+'.$t.'"></label>

  <input id="1+'.$t.'" type="radio" class="star" value="1" name='.  $t  .'>
    <label title="1" for="1+'.$t.'"></label>

  <input id="0+'.$t.'" type="radio" class="star" value="0" name='.  $t  .'>
    <label title="0" for="0+'.$t.'"></label>
</div>
</div> 
</div>';
 if($t==1){
 	$ratA= $t ;
 	//$n1=$n;
 }
 if($t==2){
 	 $ratB= $t ;
 	//$n2=$n;
 }
 if($t==3){
 	$c=$t;
 	 $ratC =  $t ;
 	//$n3=$n;
 }
 if($t==4){
 	 $ratD =  $t ;
 	//$n4=$n;
 }
 if($t==5){
 	 $ratE =$t;
	}

    } 
    echo '<div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" align="right">
<input type="submit" class="btn btn-dark"  value="Send" name="submit_update_rating" />
</form>';
if(isset($_POST["submit_update_rating"]))
{	
  $rat_a= $_POST[$ratA];
  $rat_b= $_POST[$ratB];
  $rat_c=$_POST[$ratC];
  $rat_d=$_POST[$ratD];
  $rat_e=$_POST[$ratE];
  
$film_id1=$ratA;
$film_id2=$ratB;
$film_id3=$ratC;
$film_id4=$ratD;
$film_id5=$ratE;

//if(!$mysqli->query('insert into rating(id_users,id_film,rating) values ("'.$id_us.'", "'.$film_id1.'", "'.$rat_a.'") on duplicate key update id_users=2, id_film=1')){
	
	/*if(!$mysqli->query('
	IF EXISTS(select * from rating where id_users="'.$id_us.'" and id_film="'.$film_id1.'")
	then
	begin
	update rating SET id_users="'.$id_us.'", id_film="'.$film_id1.'", rating="'.$rat_a.'";
	end;
	ELSE
	begin
	insert into rating(id_users,id_film,rating) values ("'.$id_us.'", "'.$film_id1.'", "'.$rat_a.'");
	end;
	end if;
	')){
	
	echo 'Не удалось создать таблицу: ("'. $mysqli->errno . '") ' . $mysqli->error;
	};

*/

if	
(!$mysqli->query('IF EXISTS (SELECT * FROM rating INNER JOIN users ON users.id_users=rating.id_users INNER JOIN films ON films.id_films=rating.id_film
 WHERE rating.id_users="'.$id_us.'")
 THEN
  BEGIN
UPDATE rating  SET 
rating.rating=(
CASE
WHEN(rating.id_film="'.$film_id1.'")THEN "'.$rat_a.'"
WHEN(rating.id_film="'.$film_id2.'")THEN "'.$rat_b.'"
WHEN(rating.id_film="'.$film_id3.'")THEN "'.$rat_c.'"
WHEN(rating.id_film="'.$film_id4.'")THEN "'.$rat_d.'"
ELSE "'.$rat_e.'"
END) 
WHERE rating.id_users="'.$id_us.'";
END;
ELSE
    BEGIN
INSERT INTO rating(id_users, id_film, rating)
VALUES ("'.$id_us.'","'.$film_id1.'","'.$rat_a.'"),
       ("'.$id_us.'","'.$film_id2.'","'.$rat_b.'"),
       ("'.$id_us.'","'.$film_id3.'","'.$rat_c.'"),
       ("'.$id_us.'","'.$film_id4.'","'.$rat_d.'"),
       ("'.$id_us.'","'.$film_id5.'","'.$rat_e.'");
       END;
      END IF;
' )) {
  echo 'Не удалось создать таблицу: ("'. $mysqli->errno . '") ' . $mysqli->error;}
}
?>

</div>
    <script src="bootstrap/dist/js/jquery.js"></script>
     <script src="bootstrap/dist/js/bootstrap.min.js"></script> 
</body>
</html>