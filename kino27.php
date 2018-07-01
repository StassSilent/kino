
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Кино</title>

    <!-- Bootstrap core CSS -->
       <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="#" rel="stylesheet">
  </head>

  <body>
	

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Welcome!!!</h1>
          <p class="lead ">Would you like to participate in the poll about the film rating?</p>
          <p>
            <a href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#VoidModal">Statistics</a>
           
          </p>
        </div>
      </section>
		
      <div class="album py-2 bg-light">
        <div class="container">
			 <h3 class="jumbotron-heading py-3" align="center">Who are you?</h3>
          <div class="row">
          	 <?php
				  $mysqli = new mysqli("localhost", "root", "", "kino");
				if ($mysqli->connect_errno) {
				    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}
				$query ="SELECT id_users, name, img FROM users";
				$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
				
				if($result) $result_select = mysqli_query($mysqli, $query);
					while($object = mysqli_fetch_object($result_select)){
					    $user=$object->name;
					    $id_us=$object->id_users;
					    $img_user=$object->img;
					    echo '<div class="col-md-4 py-3">
				              <a href="raiting1.php?value='.$id_us.'" class="btn">
				              <div class="card  box-shadow" >'
				               .$img_user.'
				                <div class="card-body">
				                  <p class="card-text">'.$user.'</p>
				                </div>
				              </div>
				              </a>
				           </div>';
					}
					
					
					
					$query2 ="SELECT  COUNT(id_films) as countFilms FROM films ";
					$result2 = mysqli_query($mysqli, $query2) or die("Ошибка " . mysqli_error($mysqli)); 
					if($result2) $result_select2 = mysqli_query($mysqli, $query2);
					$object2 = mysqli_fetch_object($result_select2);	
					$countFilms=$object2->countFilms;
				   
				    $query4 ="SELECT  COUNT(id_users) as countUsers FROM users ";
					$result4 = mysqli_query($mysqli, $query4) or die("Ошибка " . mysqli_error($mysqli)); 
					if($result4) $result_select4 = mysqli_query($mysqli, $query4);
					$object4 = mysqli_fetch_object($result_select4);	
					$countUsers=$object4->countUsers;
				  
				    $query3 ="SELECT id_film, (rating/10) AS rating, id_users FROM rating ORDER BY id_film, id_users";
				    $result3 = mysqli_query($mysqli, $query3) or die("Ошибка " . mysqli_error($mysqli)); 
					$t=NULL;
					while($row = mysqli_fetch_array($result3)){ 
						if ($row['id_film']==$t) {
							array_push($arr[$t], $row['rating']);
						}
						else {
						$t= $row['id_film'];
						$arr[$t] =array($row['rating']);
						}
					}
					for ($i=1; $i<=$countFilms; $i++){
						$sum[$i]= array_sum($arr[$i]);
					}
					
					for ($i=1; $i<=$countFilms; $i++){
						for ($j=1; $j<$countFilms; $j++){	
					 	    $del[$i] = ((double) ($arr[$i][$j])/ ((double) ($sum[$i])));
							if ($del[$i]!=0)   $value[$j]=($del[$i])*log($del[$i]); else $value[$j]=NULL;
						}
						$val[$i]=(-1/log(6))*array_sum($value);
						$valvrem=$val[$i];
						$InsertValue ="INSERT INTO value(id_film_value, value) VALUE($i,$valvrem) ON DUPLICATE KEY
						 UPDATE value=$valvrem";
					//	$InsertValue = "INSERT INTO value(value) WHERE (id_film_value=$i) VALUE ($val[$i])";
						$result = mysqli_query($mysqli, $InsertValue) or die("Ошибка insert " . mysqli_error($mysqli)); 
					}
					
			?>	
     
          </div>
        </div>
      </div>

    </main>

    <div class="modal fade" id="VoidModal" tabindex="-1" role="dialog" aria-labelledy="VoidModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="VoidModalLable">Rating</h5>
				<button class="close" type="button" data-dismiss="modal" aria-lable="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<form align="center">
						
					<?php
						$mysqli = new mysqli("localhost", "root", "", "kino");
						if ($mysqli->connect_errno) {
						    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
						}

						$query1 ="SELECT id_film_value, value FROM value";
						$result1 = mysqli_query($mysqli, $query1) or die("Ошибка " . mysqli_error($mysqli)); 
						
						if($result1) $result_select1 = mysqli_query($mysqli, $query1);
						
						
							while($object1 = mysqli_fetch_object($result_select1)){
							    $id_film=$object1->id_film_value;
							    $film_value=$object1->value;
							    
							    $queryName ="SELECT name_film FROM films WHERE id_films=$id_film";
								$resultName = mysqli_query($mysqli, $queryName) or die("Ошибка " . mysqli_error($mysqli)); 
								$object3 = mysqli_fetch_object($resultName);
								$film_name=$object3->name_film;
								    echo '<div class="form-froup">
								<div class="form-row">
									
										   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<lable for="VoidInput"> '.$film_name.' = </lable>
												<lable for="VoidInput"> '.round($film_value,2).' </lable>
											</div>
								</div>
								</div>';
							}
					?>	
							
						</form>
					</div>	
				</div>
				<div class="modal-footer">
					
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		
	</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/dist/js/jquery.js"></script>
     <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
