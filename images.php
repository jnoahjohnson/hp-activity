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
			       <li><a href="#images">Images</a></li>
			     </ul>
		  	</div>
	      </div>
	    </div>
	        
		
		<div class-"container" style="height: auto; padding-bottom: 20px !important">
			<h1 class="centerText" id ="images" style="margin-bottom: 20px !important; ">Images</h1>
			
			<div>
			<h2>Activities!</h2>
			</div>
			
			<div class="myGalleryRow">
				<div class="myGalleryColumn" id="activityColumnOne">
				
				</div>
				<div class="myGalleryColumn" id="activityColumnTwo">
				
				</div>
				<div class="myGalleryColumn" id="activityColumnThree">
				
				</div>
				
			</div>
			
			<div>
				<h2>Opening Ceremony!</h2>
			</div>
			
			<div class="myGalleryRow">
				<div class="myGalleryColumn" id="galleryColumnOne">
				
				</div>
				<div class="myGalleryColumn" id="galleryColumnTwo">
				
				</div>
				<div class="myGalleryColumn" id="galleryColumnThree">
				
				</div>
				
			</div>
			
			
			
			<style>
				.myGalleryRow {
				  display: flex;
				  flex-wrap: wrap;
				  padding: 0 4px;	
				}
				
				/* Create two equal columns that sits next to each other */
				.myGalleryColumn {
				    flex: 33%;
					max-width: 33%;
					padding: 0 4px;
				}
				
				.GalleryImage {
				  margin-top: 8px;
				  width: 100%;
				
				}
				
				@media screen and (max-width: 800px) {
				  .myGalleryColumn {
				    flex: 50%;
				    max-width: 50%;
				  }
				}
				
				/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
				@media screen and (max-width: 600px) {
				  .myGalleryColumn {
				    flex: 100%;
				    max-width: 100%;
				  }
				}
				
				.galleryDiv {
					padding-bottom: 20px !important;
				}
			</style>
			
			<script>
							
			var folder2 = "activityImages/";
			var firstColumn = true;     
            var secondColumn = false;
            var thirdColumn = false;

				$.ajax({
				    url : folder2,
				    success: function (data) {
				        $(data).find("a").attr("href", function (i, val) {
			
				            if( val.match(/\.(jpe?g|png|gif|heic)$/) ) { 
					            
					            if (firstColumn == true) {
					                $("#activityColumnOne").append( "<img src='"+ folder2 + val +"' class='GalleryImage'>" );
					                firstColumn = false;
					                secondColumn = true;
					            }
					            else if (secondColumn == true) {
						            $("#activityColumnTwo").append( "<img src='"+ folder2 + val +"' class='GalleryImage'>" );
						            secondColumn = false;
						            thirdColumn = true;
					            }
					            else if (thirdColumn == true) {
						            $("#activityColumnThree").append( "<img src='"+ folder2 + val +"' class='GalleryImage'>" );
						            thirdColumn = false;
						            firstColumn = true;
					            }
				            } 
				        });
				    }
				});
	
				

			
			</script>
			
			<script>
			var folder = "galleryImages/";
			var firstColumn = true;     
            var secondColumn = false;
            var thirdColumn = false;

				$.ajax({
				    url : folder,
				    success: function (data) {
				        $(data).find("a").attr("href", function (i, val) {
			
				            if( val.match(/\.(jpe?g|png|gif|heic)$/) ) { 
					            
					            if (firstColumn == true) {
					                $("#galleryColumnOne").append( "<img src='"+ folder + val +"' class='GalleryImage'>" );
					                firstColumn = false;
					                secondColumn = true;
					            }
					            else if (secondColumn == true) {
						            $("#galleryColumnTwo").append( "<img src='"+ folder + val +"' class='GalleryImage'>" );
						            secondColumn = false;
						            thirdColumn = true;
					            }
					            else if (thirdColumn == true) {
						            $("#galleryColumnThree").append( "<img src='"+ folder + val +"' class='GalleryImage'>" );
						            thirdColumn = false;
						            firstColumn = true;
					            }
				            } 
				        });
				    }
				});
			</script>
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
