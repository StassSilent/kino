
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
												<lable for="VoidInput"> '.$film_value.' </lable>
											</div>
								</div>
								</div>';
							}
					?>	