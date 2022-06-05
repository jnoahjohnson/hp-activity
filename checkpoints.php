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
			       <li><a href="">Home</a></li>
			       <li><a href="#ideas">Ideas</a></li>
			       <li><a href="#submit">Submit an Activity</a></li>
			       <li><a href="scavenger.php">Scavenger Hunt</a></li>
			       <li><a href="houses.php">House Members</a></li>
			       <li><a href="images.php">Images</a></li>
			     </ul>
		  	</div>
		  	
		  	<div class="wecomeMessage" style="background: rgba(255, 99, 239, .9); margin-bottom: 40px; padding-left: 40px; padding-right: 40px; width: 70%; display: inline-block; padding-top: 10px; padding-bottom: 5px;">
			  	<p>Finale here we come! Give it your all this last week. <br> We are excited to see you at the finish line next Monday!</p>
			  	
		  	</div> 	
		
	        
			<!-- Points -->
			<div class="row">
				<div class="col-md-2"></div>
				
			  <div class="col-md-2 col-sm-6 col-xs-6 hourglass" style="margin-left: 0px !important;">
				  
				  <h3 id="gryfPlace" class="placeNumbers">1st</h3>
				 
				  <div class="topHourglass gryfTopHourglass"> </div>
			    <div class="middleHourglass gryfTopHourglass"></div>
			   
			    
			  	<div class="progress" style="height: 500px">
				  <img src="images/gryffindor-crest.png" class="crestImage" id="gryfCrest" style="bottom: 0%">
			  	  <div class="progress-bar" id="gryfProgressBar" role="progressbar" style="height: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			  	</div>
			  	
			    <h3>Points</h3>
			    <h4 id="gryffindorPoints">
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
					$sql ="SELECT HouseName, SUM(Points) AS PointTotal FROM Action, User, House WHERE User.HouseID = House.HouseID AND User.UserID = Action.UserID AND HouseName = \"Gryffindor\" GROUP BY HouseName";
					
					$result = $conn->query($sql);
					
					$row = $result->fetch_assoc();
					
					if ($row["PointTotal"] > 0) {
						echo $row["PointTotal"]. "<br>";
					} else {
						echo 0;
						}
					?>
				</h4>
				
				 
				
			  </div>
			  <div class="col-md-2 col-sm-6 col-xs-6 hourglass">
				  
				 	<h3 id="huffPlace" class="placeNumbers">2nd</h3>
				  
				<div class="topHourglass huffTopHourglass"> </div>
				
				<div class="middleHourglass huffTopHourglass"></div>
				
			  	
				<div class="progress" style="height: 500px">
					<img src="images/hufflepuff-crest.png" class="crestImage" id="huffCrest">
					<div class="progress-bar" id="huffProgressBar" role="progressbar" style="height: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				
			    <h3>Points</h3>
			    <h4 id="hufflepuffPoints">
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
					$sql ="SELECT HouseName, SUM(Points) AS PointTotal FROM Action, User, House WHERE User.HouseID = House.HouseID AND User.UserID = Action.UserID AND HouseName = \"Hufflepuff\" GROUP BY HouseName";
					
					$result = $conn->query($sql);
					
					$row = $result->fetch_assoc();
					
					if ($row["PointTotal"] > 0) {
						echo $row["PointTotal"]. "<br>";
					} else {
						echo 0;
						}
					?>
				</h4>
				
				
				
			 </div>
			  <div class="col-md-2 col-sm-6 col-xs-6 hourglass">
				  
				  
			<h3 id="ravenPlace" class="placeNumbers">3rd</h3>
				  
				  <div class="topHourglass ravenTopHourglass"> </div>
				  <div class="middleHourglass ravenTopHourglass"></div>
				  
				
				<div class="progress" style="height: 500px">
					<img src="images/ravenclaw-crest.png" class="crestImage" id="ravenCrest">
					<div class="progress-bar" id="ravenProgressBar" role="progressbar" style="height: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				
			
			    <h3>Points</h3>
			    <h4 id="ravenclawPoints">
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
					$sql ="SELECT HouseName, SUM(Points) AS PointTotal FROM Action, User, House WHERE User.HouseID = House.HouseID AND User.UserID = Action.UserID AND HouseName = \"Ravenclaw\" GROUP BY HouseName";
					
					$result = $conn->query($sql);
					
					$row = $result->fetch_assoc();
					
					if ($row["PointTotal"] > 0) {
						echo $row["PointTotal"]. "<br>";
					} else {
						echo 0;
						}
					?>
				</h4>
				
				
	
			  </div>
			  
				<div class="col-md-2 col-sm-6 col-xs-6 hourglass">
					
					<h3 id="slyPlace" class="placeNumbers">4th</h3>
					
					<div class="topHourglass slyTopHourglass"> </div>
					<div class="middleHourglass slyTopHourglass"></div>
					
				  
				  <div class="progress" style="height: 500px">
				    <img src="images/slytherin-crest.png" class="crestImage" id="slyCrest">
				    <div class="progress-bar" id="slyProgressBar" role="progressbar" style="height: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  
			
				  <h3>Points</h3>
				  <h4 id="slytherinPoints">
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
				  	$sql ="SELECT HouseName, SUM(Points) AS PointTotal FROM Action, User, House WHERE User.HouseID = House.HouseID AND User.UserID = Action.UserID AND HouseName = \"Slytherin\" GROUP BY HouseName";
				  	
				  	$result = $conn->query($sql);
				  	
				  	$row = $result->fetch_assoc();
				  	
				  	if ($row["PointTotal"] > 0) {
				  		echo $row["PointTotal"]. "<br>";
				  	} else {
				  		echo 0;
				  		}
				  	?>
				  </h4>
				  
				  
			
				</div>
				
			</div>
			
			<div>
			
			
		
			
			
			</div>
			
			<script>
				
			var totalPoints = 10000;
			var pointMultipier = .02;
			
			//Gryffindor Variables
			
			var totalGryfPoints;
			
			var gryfProgress = document.getElementById("gryfProgressBar");
			var gryfPointsText = parseInt(document.getElementById("gryffindorPoints").innerHTML);
			var gryfCrest = document.getElementById("gryfCrest");
			
			//Hufflepuff Variables
			
			var totalHuffPoints
			
			var huffProgress = document.getElementById("huffProgressBar");
			var huffPointsText = parseInt(document.getElementById("hufflepuffPoints").innerHTML);
			var huffCrest = document.getElementById("huffCrest");
			
			//Ravenclaw Variables
			
			var totalRavenclawPoints;
			
			var ravenProgress = document.getElementById("ravenProgressBar");
			var ravenPointsText = parseInt(document.getElementById("ravenclawPoints").innerHTML);
			var ravenCrest = document.getElementById("ravenCrest");
			
			//Slytherin Variables
			
			var totalSlytherinVariables;
			
			var slyProgress = document.getElementById("slyProgressBar");
			var slyPointsText = parseInt(document.getElementById("slytherinPoints").innerHTML);
			var slyCrest = document.getElementById("slyCrest");
			
			//Function to see who has the most points
			
			
			function setGryfPoints(points) {
				
				console.log(points);
				
				var percentage = (points / totalPoints) * 100;
				var heightPosition = 70 - ((points * pointMultipier));
				
				if (points > 6000) {
					heightPosition = 70 - ((6000 * pointMultipier));
				}
				
				gryfCrest.style = "bottom: " + heightPosition + "%;";
				
				gryfProgress.style = "height: " + percentage + "%;";
				
			}
			
			function setHuffPoints(points) {
				
				var percentage = (points / totalPoints) * 100;
				var heightPosition = 70 - ((points * pointMultipier));
				
				if (points > 6000) {
					heightPosition = 70 - ((6000 * pointMultipier));
				}
				
				huffCrest.style = "bottom: " + heightPosition + "%;";
				
				huffProgress.style = "height: " + percentage + "%;";
				
			}
			
			function setRavenPoints(points) {
				
				var percentage = (points / totalPoints) * 100;
				var heightPosition = 70 - ((points * pointMultipier));
				
				if (points > 6000) {
					heightPosition = 70 - ((6000 * pointMultipier));
				}
				
				ravenCrest.style = "bottom: " + heightPosition + "%;";
				
				ravenProgress.style = "height: " + percentage + "%;";
				
			}
			
			function setSlyPoints(points) {
				
				var percentage = (points / totalPoints) * 100;
				var heightPosition = 70 - ((points * pointMultipier));
				
				if (points > 6000) {
					heightPosition = 70 - ((6000 * pointMultipier));
				}
				
				slyCrest.style = "bottom: " + heightPosition + "%;";
				slyProgress.style = "height: " + percentage + "%;";
				
			}
			
			function findPlaces() {
				var gryfPlace = document.getElementById("gryfPlace");
				var huffPlace = document.getElementById("huffPlace");
				var ravenPlace = document.getElementById("ravenPlace");
				var slyPlace = document.getElementById("slyPlace");
				
				var housesArray = [document.getElementById("gryfPlace"), huffPlace, ravenPlace, slyPlace];
				var housePoints = [gryfPointsText, huffPointsText, ravenPointsText, slyPointsText];
				
				console.log(housePoints[2]);
				
				for (var i = 0; i < housesArray.length - 1; i++) {
					for (var j = i + 1; j < housesArray.length; j++) {
						if (housePoints[i] < housePoints[j]) {
							var pointsHolder = housePoints[i];
							var houseHolder = housesArray[i];
							
							housePoints[i] = housePoints[j];
							housePoints[j] = pointsHolder;
							
							housesArray[i] = housesArray[j];
							housesArray[j] = houseHolder;
							
						}
					}
				}
				
				
				housesArray[0].innerHTML = "1st";
				housesArray[1].innerHTML = "2nd";
				housesArray[2].innerHTML = "3rd";
				housesArray[3].innerHTML = "4th";
			}
			
			
			setGryfPoints(gryfPointsText);
			setHuffPoints(huffPointsText);
			setRavenPoints(ravenPointsText);
			setSlyPoints(slyPointsText);
			
			findPlaces();
			
			function photosUploaded() {
				document.getElementById("photoUpload").innerHTML = "File Uploaded. Click below to submit activity.";
				document.getElementById("photoUpload").classList.remove("btn");
				document.getElementById("photoUpload").classList.remove("uploadPhotosButton");
				document.getElementById("photoUpload").style="font-size: 14xpx;"
			}
			

		
			</script>
			
	      </div>
	    </div>
		
		
		<div class="container ideasBox" style="height: auto !important">
			<h1 class="centerText" id="ideas">List of Ideas</h1>
			<p class="centerText">Below are the many ways that you can earn points.</p>
			
			
			<div class="col-md-12">
				<h2>Ten Points</h2>
				<ul>
					<li>Attendance</li>
					<li class="tab">Fhe</li>
					<li class="tab">Institute</li>
					<li class="tab">Ward activities</li>
					<li class="tab">Stake activities</li>
					<li>Conference Talk (once a week)</li>
					<li>Contact your parents/grandparents (once a week)</li>
					<li class="pictureList">Go to the gym/exercise for at least 30 minutes (daily)</li>
					<li>Every food item you bring for the food drive. <strong>Double points if house colors represented</strong> (throughout the month)</li>
				</ul>
			</div>
			
	
			<div class="col-md-12">
				<h2>Twenty Points</h2>
				<ul>
					<li class="pictureList">Clean your bedroom (one time)</li>
					<li class="pictureList">Ministering (double if you visit them)</li>
					<li>Indexing</li>
					<li>Find a family name to take to the temple</li>
					<li class="pictureList">Watch a harry potter movie</li>
					<li>Come Follow Me Study (once a week)</li>
					<li>Share a scripture with a friend (once a week)</li>
					<li class="pictureList">Visit temple grounds(different temple each time) *resets every week</li>
					<li class="pictureList">Host or attend a ward game/movie night</li>
					<li class="pictureList">Prepare and cook dinner for your family/friends</li>
					<li>Study the scriptures for 30 minutes</li>
					<li class="pictureList">Learn or develop a new skill/talent</li>
				</ul>
			</div>
			
			<div class="col-md-12">
				<h2>Fifty Points</h2>
				<ul>
					<li class="pictureList">Bake your neighbor something yummy <strong>*double if it’s a Harry Potter treat</strong>(one time)</li>
					<li class="pictureList">Temple work *double for going to a temple outside of Provo</li>
					<li class="pictureList">Shovel your neighbor’s driveway</li>
					<li>Read a Harry Potter Book</li>
					<li class="pictureList">Going on a date (once a week)</li>
					<li>Write in your journal every day for a week (once)</li>
					<li>Spend 30 minutes doing family history work</li>
				</ul>
			</div>
			
			<div class="col-md-12">
				<h2>One Hundred Points</h2>
				<ul>
					<li>Quidditch (winning team)</li>
					<li>Social Media Fast for a week (one time)</li>
					<li class="pictureList">Feed the Missionaries</li>
					<li class="pictureList">Ward temple activity (+20 points for getting food with the ward)</li>
				</ul>
			</div>
			
			<div class="col-md-12">
				<h2>One Hundred and Fifty Points</h2>
				<ul>
					<li class="pictureList">Donate blood for the <strong>Stake Blood Drive</strong></li>
				</ul>
			</div>
			
			<div class="col-md-12">
				<h2>Two Hundred Points</h2>
				<ul>
					<li>Complete the <a href="scavenger.php" style="color: white"><strong>Scavenger hunt</strong></a></li>
				</ul>
			</div>
		
		</div>
		
		<div class="container centerText submitForm" style="height: auto">
			<h1 class="centerText" id="submit">Submit an Activity</h1>
			<p class ="centerText infoText">Here you can submit any activity that you have done. Please be honest and only submit once. <br>
				<strong>Make sure to submit your full name or points will not be counted</strong> <br>
				If you have any problems submitting,<br>
				Text (801)318-7725 or Email jnoahjohnson@gmail.com <br>
			</p>
			<form enctype="multipart/form-data"
			action="add.php" method="POST" class="centerText" onsubmit="return confirm('Are you sure you want to submit?');"> 
			<p class="formText">What is your full name?:</h1><br>
			<input type="text" name="name"><br> 
			<p class="formText">What activity did you do?:</h1> <br>
			<input type="text" name="activity"><br>
			<p class="formText">Upload any photo that you took:</h1> <br>
			<input type="file" name="photo" multiple="" class="hidden" id="fileUpload" onchange="photosUploaded()"> <label for="fileUpload" class="uploadPhotosButton btn" id="photoUpload">Click Here to Upload Photos</label><br>
			<input type="submit" class="btn uploadPhotosButton submitButton" value="Submit">   </form>

			
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
    </body>
</html>
