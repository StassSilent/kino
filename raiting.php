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
<link href="stlab.css" rel="stylesheet">
  </head>
  <body>
  
  <?php  
 	 $val=$_GET['value']; 
 	 echo "<h2 align = 'center'>Hello! ". $val."</h2>";
 	  echo "<h3 align= 'center'> ".$val. ",поставь рейтинг.</h3>";
  ?>
  
  <div class="container" >
  <form name="starform" action="#" method="POST">
  <div class="row ">
   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
  <div id="reviewStars-input" class="star">
  <input id="star-10" type="radio" name="star-group1">
    <label title="10" for="star-10"></label>
    
  <input id="star-9" type="radio" name="star-group1">
    <label title="9" for="star-9"></label>
  
  <input id="star-8" type="radio" name="star-group1">
    <label title="8" for="star-8"></label>
  
  <input id="star-7" type="radio" name="star-group1">
    <label title="7" for="star-7"></label>
  
  <input id="star-6" type="radio" name="star-group1">
    <label title="6" for="star-6"></label>
  
  <input id="star-5" type="radio" name="star-group1">
    <label title="5" for="star-5"></label>
    
    <input id="star-4" type="radio" name="star-group1">
    <label title="4" for="star-4"></label>
    <input id="star-3" type="radio" name="star-group1">
    <label title="3" for="star-3"></label>

    <input id="star-2" type="radio" name="star-group1">
    <label title="2" for="star-2"></label>

    <input id="star-1" type="radio" name="star-group1">
    <label title="1" for="star-1"></label>

    <input id="star-0" type="radio" name="star-group1">
    <label title="0" for="star-0"></label>
</div>
</div> 
</div>
<div class="row ">
   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
  <div id="reviewStars-input1" class="star">
  <input id="star-100" type="radio" name="star-group2">
    <label title="10" for="star-100"></label>
    
  <input id="star-90" type="radio" name="star-group2">
    <label title="9" for="star-90"></label>
  
  <input id="star-80" type="radio" name="star-group2">
    <label title="80" for="star-80"></label>
  
  <input id="star-70" type="radio" name="star-group2">
    <label title="7" for="star-70"></label>
  
  <input id="star-60" type="radio" name="star-group2">
    <label title="6" for="star-60"></label>
  
  <input id="star-50" type="radio" name="star-group2">
    <label title="5" for="star-50"></label>
    
    <input id="star-40" type="radio" name="star-group2">
    <label title="4" for="star-40"></label>
    
    <input id="star-30" type="radio" name="star-group2">
    <label title="3" for="star-30"></label>

    <input id="star-20" type="radio" name="star-group2">
    <label title="2" for="star-20"></label>

    <input id="star-10" type="radio" name="star-group2">
    <label title="1" for="star-10"></label>

    <input id="star-00" type="radio" name="star-group2">
    <label title="0" for="star-00"></label>
</div>
</div> 
</div>
<div class="row ">
   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
  <div id="reviewStars-input2" class="star">
  <input id="star-10" type="radio" name="star-group3">
    <label title="10" for="star-10"></label>
    
  <input id="star-9" type="radio" name="star-group3">
    <label title="9" for="star-9"></label>
  
  <input id="star-8" type="radio" name="star-group3">
    <label title="8" for="star-8"></label>
  
  <input id="star-7" type="radio" name="star-group3">
    <label title="7" for="star-7"></label>
  
  <input id="star-6" type="radio" name="star-group3">
    <label title="6" for="star-6"></label>
  
  <input id="star-5" type="radio" name="star-group3">
    <label title="5" for="star-5"></label>
    
    <input id="star-4" type="radio" name="star-group3">
    <label title="4" for="star-4"></label>
    <input id="star-3" type="radio" name="star-group3">
    <label title="3" for="star-3"></label>

    <input id="star-2" type="radio" name="star-group3">
    <label title="2" for="star-2"></label>

    <input id="star-1" type="radio" name="star-group3">
    <label title="1" for="star-1"></label>

    <input id="star-0" type="radio" name="star-group3">
    <label title="0" for="star-0"></label>
</div>
</div> 
</div>
<div class="row ">
   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
  <div id="reviewStars-input3" class="star">
  <input id="star-10" type="radio" name="star-group4" value="khjk">
    <label title="10" for="star-10"></label>
    
  <input id="star-9" type="radio" name="star-group4">
    <label title="9" for="star-9"></label>
  
  <input id="star-8" type="radio" name="star-group4">
    <label title="8" for="star-8"></label>
  
  <input id="star-7" type="radio" name="star-group4">
    <label title="7" for="star-7"></label>
  
  <input id="star-6" type="radio" name="star-group4">
    <label title="6" for="star-6"></label>
  
  <input id="star-5" type="radio" name="star-group4">
    <label title="5" for="star-5"></label>
    
    <input id="star-4" type="radio" name="star-group4">
    <label title="4" for="star-4"></label>
    <input id="star-3" type="radio" name="star-group4">
    <label title="3" for="star-3"></label>

    <input id="star-2" type="radio" name="star-group4">
    <label title="2" for="star-2"></label>

    <input id="star-1" type="radio" name="star-group4">
    <label title="1" for="star-1"></label>

    <input id="star-0" type="radio" name="star-group4">
    <label title="0" for="star-0"></label>
</div>
</div> 
</div>
<div class="row ">
   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
  <div id="reviewStars-input4" class="star">
  <input id="star-10" type="radio" name="star-group5">
    <label title="10" for="star-10"></label>
    
  <input id="star-9" type="radio" name="star-group5">
    <label title="9" for="star-9"></label>
  
  <input id="star-8" type="radio" name="star-group5">
    <label title="8" for="star-8"></label>
  
  <input id="star-7" type="radio" name="star-group5">
    <label title="7" for="star-7"></label>
  
  <input id="star-6" type="radio" name="star-group5">
    <label title="6" for="star-6"></label>
  
  <input id="star-5" type="radio" name="star-group5">
    <label title="5" for="star-5"></label>
    
    <input id="star-4" type="radio" name="star-group5">
    <label title="4" for="star-4"></label>
    <input id="star-3" type="radio" name="star-group5">
    <label title="3" for="star-3"></label>

    <input id="star-2" type="radio" name="star-group5">
    <label title="2" for="star-2"></label>

    <input id="star-1" type="radio" name="star-group5">
    <label title="1" for="star-1"></label>

    <input id="star-0" type="radio" name="star-group5">
    <label title="0" for="star-0"></label>
</div>
</div> 
</div>

</form>
</div>    
    <script src="bootstrap/dist/js/jquery.js"></script>
     <script src="bootstrap/dist/js/bootstrap.min.js"></script> 
</body>
</html>