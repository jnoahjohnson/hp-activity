<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Potter Cup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel='stylesheet' href='/css/main.css'>
		<link rel='stylesheet' href='/css/normalize.min.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
        <style>
            body {
                padding-top: 0px;
                padding-bottom: 20px;
            }
        </style>
		<link rel='stylesheet' href='css/bootstrap-theme.css'>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		<script src='js/vendor/modernizr-2.6.2.min.js'></script>
		<script src='js/main.js'></script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135207892-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-135207892-1');
		</script>
		
    </head>
    
    <body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
	
	    <!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron main-banner" id="scores">
	      <div class="container centerText">
	       
		  	<a href="index.php"><img src="../images/Logo.png" class="hogwartsHead"></a>
		  	<div class="navbar">
			     <ul class="nav navbar-nav usernav">
			       <li><a href="index.php">Home</a></li>
			       <li><a href="scavenger.php">Scavenger Hunt</a></li>
			       <li><a href="images.php">Images</a></li>
			     </ul>
		  	</div>
		  	
	      </div>
	    </div>
	        
			<!-- Houses -->
			<div class="container centerText">
				
				<h1 style="margin-bottom: 30px;">Check Out Who is in Each House</h1>
		
				
			  <div class="col-md-3 col-sm-6 col-xs-6 houseColumn">
				  
				  <img src="images/gryffindor-crest.png" class="crestHouse">
				  
				  <h3>Head Girl</h3>
				  <h4>Shaunna Boothe</h4>
				  
				  <h3>Prefect</h3>
				  <h4>Andrew Simmons</h4>
				  
				  <h3>Members</h3>
				  
				 <p class="houseParticipantNames">
					 <?php
					$servername = "byu9";
					$username = "devpinea_noah";
					$password = "cFk]q2wXr1Gc";
					$dbname = "devpinea_hogwarts";
					
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 
					
					$sql = "SELECT UserName FROM `User`, House WHERE User.HouseID = House.HouseID AND HouseName = \"Gryffindor\" AND UserName != \"Shaunna Boothe\" AND UserName != \"Andrew Simmons\"";
					
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						    // output data of each row
						while($row = $result->fetch_assoc()) {
						    echo $row["UserName"]. "<br>";
						 }
						} else {
						    echo "0 results";
						}
					?>
					
				 </p>
				 
				
			  </div>
			  
			   <div class="col-md-3 col-sm-6 col-xs-6 houseColumn">
				  
				  <img src="images/hufflepuff-crest.png" class="crestHouse">
				  
				  <h3>Head Girl</h3>
				  <h4>Korin Beckstead</h4>
				  
				  <h3>Prefect</h3>
				  <h4>Shayne Denning</h4>
				  
				  <h3>Members</h3>
				  
				  
				 <p class="houseParticipantNames">
					 <?php
					$servername = "byu9";
					$username = "devpinea_noah";
					$password = "cFk]q2wXr1Gc";
					$dbname = "devpinea_hogwarts";
					
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 
					
					$sql = "SELECT UserName FROM `User`, House WHERE User.HouseID = House.HouseID AND HouseName = \"Hufflepuff\" AND UserName != \"Korin Beckstead\" AND UserName != \"Shayne Denning\"";
					
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						    // output data of each row
						while($row = $result->fetch_assoc()) {
						    echo $row["UserName"]. "<br>";
						 }
						} else {
						    echo "0 results";
						}
					?>
					
				 </p>
				 
				
			  </div>
			
			
			 <div class="col-md-3 col-sm-6 col-xs-6 houseColumn">
				  
				  <img src="images/ravenclaw-crest.png" class="crestHouse">
				  
				  <h3>Head Girl</h3>
				  <h4>Sarah Herring</h4>
				  
				  <h3>Prefect</h3>
				  <h4>Noah Johnson</h4>
				  
				  <h3>Members</h3>
				  
				  
				 <p class="houseParticipantNames">
					 <?php
					$servername = "byu9";
					$username = "devpinea_noah";
					$password = "cFk]q2wXr1Gc";
					$dbname = "devpinea_hogwarts";
					
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 
					
					$sql = "SELECT UserName FROM `User`, House WHERE User.HouseID = House.HouseID AND HouseName = \"Ravenclaw\" AND UserName != \"Sarah Herring\" AND UserName != \"Noah Johnson\"";
					
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						    // output data of each row
						while($row = $result->fetch_assoc()) {
						    echo $row["UserName"]. "<br>";
						 }
						} else {
						    echo "0 results";
						}
					?>
					
				 </p>
				 
				
			  </div>
			  
			   <div class="col-md-3 col-sm-6 col-xs-6 houseColumn">
				  
				  <img src="images/slytherin-crest.png" class="crestHouse">
				  
				  <h3>Head Girl</h3>
				  <h4>Krystal Lucci</h4>
				  
				  <h3>Prefect</h3>
				  <h4>Rob Towne</h4>
				  
				  <h3>Members</h3>
				  
				  
				 <p class="houseParticipantNames">
					 <?php
					$servername = "byu9";
					$username = "devpinea_noah";
					$password = "cFk]q2wXr1Gc";
					$dbname = "devpinea_hogwarts";
					
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 
					
					$sql = "SELECT UserName FROM `User`, House WHERE User.HouseID = House.HouseID AND HouseName = \"Slytherin\" AND UserName != \"Krystal Lucci\" AND UserName != \"Rob Towne\"";
					
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						    // output data of each row
						while($row = $result->fetch_assoc()) {
						    echo $row["UserName"]. "<br>";
						 }
						} else {
						    echo "0 results";
						}
					?>
					
				 </p>
				 
				
			  </div>
			  </div>


	    <div class="container footer-container">
	     
	
		<hr>
		<div class="col-md-12">
	      <footer>
	        <p>&copy; Orem YSA 7th</p>
	      </footer>
		</div>
	    </div> <!-- /container -->
	    
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

		<script src='js/vendor/bootstrap-3.1.1.min.js'></script>
		<script src='js/main.js'></script>
    </body>
</html>
