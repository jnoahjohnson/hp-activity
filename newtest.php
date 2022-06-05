<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link rel='stylesheet' href='css/main.css'>
		<link rel='stylesheet' href='css/normalize.min.css'>
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
    </head>
    
    <body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		

		
	
	    <!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron main-banner" id="scores">
	      <div class="container centerText">
	       
		  	<h1 class="hogwartsHead">The Potter Cup</h1>
	        
			<!-- Points -->
			  <div class="box">
			  <div class="gryffindor">
			    <div class="top-glass"></div>
			    <div class="top-glassp"></div>
			    <div class="glassp"></div>
			    <div class="middle"></div>
			    <div class="glass"></div>
			    <div class="band"></div>
			    <div class="band5"></div>
			    <div class="podium"></div>
			    <div class="points"></div>
			    <div class="points2"></div>
			    <div class="points3"></div>
			    </div>
			    <div class="slytherin">
			    <div class="top-glass2"></div>
			      <div class="top-glassp2"></div>
			    <div class="glassp2"></div>
			      <div class="middle2"></div>
			      <div class="glass2"></div>
			      <div class="band2"></div>
			      <div class="band6"></div>
			      <div class="podium2"></div>
			      <div class="points4"></div>
			    <div class="points5"></div>
			    </div>
			     <div class="hufflepuff">
			    <div class="top-glass3"></div>
			      <div class="top-glassp3"></div>
			       <div class="glassp3"></div>
			       <div class="middle3"></div>
			       <div class="glass3"></div>
			       <div class="band3"></div>
			       <div class="band7"></div>
			       <div class="podium3"></div>
			       <div class="points6"></div>
			    <div class="points7"></div>
			    <div class="points8"></div>
			    </div>
			     <div class="ravenclaw">
			    <div class="top-glass4"></div>
			       <div class="top-glassp4"></div>
			       <div class="glassp4"></div>
			       <div class="middle4"></div>
			       <div class="glass4"></div>
			       <div class="band4"></div>
			       <div class="band8"></div>
			       <div class="podium4"></div>
			       <div class="points9"></div>
			  </div>
			</body>
			
			  </div>
		  </div>
		</div>	
		
			<script>
			
			//Gryffindor Variables
			
			var totalGryfPoints;
			
			var gryfProgress = document.getElementById("gryfProgressBar");
			var gryfPointsText = parseInt(document.getElementById("gryffindorPoints").innerHTML);
			
			//Hufflepuff Variables
			
			var totalHuffPoints
			
			var huffProgress = document.getElementById("huffProgressBar");
			var huffPointsText = parseInt(document.getElementById("hufflepuffPoints").innerHTML);
			
			//Ravenclaw Variables
			
			var totalRavenclawPoints;
			
			var ravenProgress = document.getElementById("ravenProgressBar");
			var ravenPointsText = parseInt(document.getElementById("ravenclawPoints").innerHTML);
			
			//Slytherin Variables
			
			var totalSlytherinVariables;
			
			var slyProgress = document.getElementById("slyProgressBar");
			var slyPointsText = parseInt(document.getElementById("slytherinPoints").innerHTML);
			
			function setGryfPoints(points) {
				
				console.log(points);
				
				var percentage = (points / 500) * 100;
				
				gryfProgress.style = "height: " + percentage + "%;";
				
			}
			
			function setHuffPoints(points) {
				
				var percentage = (points / 500) * 100;
				
				huffProgress.style = "height: " + percentage + "%;";
				
			}
			
			function setRavenPoints(points) {
				
				var percentage = (points / 500) * 100;
				
				ravenProgress.style = "height: " + percentage + "%;";
				
			}
			
			function setSlyPoints(points) {
				
				var percentage = (points / 500) * 100;
				
				slyProgress.style = "height: " + percentage + "%;";
				
			}
			
			
			setGryfPoints(gryfPointsText);
			setHuffPoints(huffPointsText);
			setRavenPoints(ravenPointsText);
			setSlyPoints(slyPointsText);
			
			</script>
			
	      </div>
	    </div>
		
	<div class="box">
  <div class="gryffindor">
    <div class="top-glass"></div>
    <div class="top-glassp"></div>
    <div class="glassp"></div>
    <div class="middle"></div>
    <div class="glass"></div>
    <div class="band"></div>
    <div class="band5"></div>
    <div class="podium"></div>
    <div class="points"></div>
    <div class="points2"></div>
    <div class="points3"></div>
    </div>
    <div class="slytherin">
    <div class="top-glass2"></div>
      <div class="top-glassp2"></div>
    <div class="glassp2"></div>
      <div class="middle2"></div>
      <div class="glass2"></div>
      <div class="band2"></div>
      <div class="band6"></div>
      <div class="podium2"></div>
      <div class="points4"></div>
    <div class="points5"></div>
    </div>
     <div class="hufflepuff">
    <div class="top-glass3"></div>
      <div class="top-glassp3"></div>
       <div class="glassp3"></div>
       <div class="middle3"></div>
       <div class="glass3"></div>
       <div class="band3"></div>
       <div class="band7"></div>
       <div class="podium3"></div>
       <div class="points6"></div>
    <div class="points7"></div>
    <div class="points8"></div>
    </div>
     <div class="ravenclaw">
    <div class="top-glass4"></div>
       <div class="top-glassp4"></div>
       <div class="glassp4"></div>
       <div class="middle4"></div>
       <div class="glass4"></div>
       <div class="band4"></div>
       <div class="band8"></div>
       <div class="podium4"></div>
       <div class="points9"></div>
  </div>
	     
	
	      <hr>
	
	      <footer>
	        <p>&copy; Orem YSA 7th</p>
	      </footer>
	    </div> <!-- /container -->
	    
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

		<script src='js/vendor/bootstrap-3.1.1.min.js'></script>
		<script src='js/main.js'></script>
    </body>
</html>
