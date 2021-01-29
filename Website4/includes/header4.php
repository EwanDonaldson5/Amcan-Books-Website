<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iCinema</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700,900,300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
    
    
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">





<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>I<span class="name">Cinema</span></h1>
          <p>View Your Favourite Films</p>
          <a href="#a" class="btn btn-default btn-lg page-scroll">ICinema Locations</a> </div>
      </div>
    </div>
  </div>
</header>

<style>
	div {
			margin: 0 auto;
		}
</style>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top"></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">Booking</a> </li>
          <li> <a class="page-scroll" href="#skills">Due and New Releases</a> </li>
          <li> <a class="page-scroll" href="#portfolio">News</a> </li>
          <li> <a class="page-scroll" href="#contact">Reviews</a> </li>
          <li> <a class="page-scroll" href="goodbye.php" >Sign Out</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!--Booking-->
<div id="about">
<div class="container">
	<div class="page-header">
	  <h1><span class="fa fa-ticket" aria-hidden="true"></span> Book Now</h1>
	  
	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
       <span class="glyphicon glyphicon-film"></span> Deadpool</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
		<p>This film is Deadpool</p>
	  <p> <a href="shop.php" class="btn btn-primary" role="button">Book Now</a></p>
	  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <span class="glyphicon glyphicon-film"></span> Finding Dory</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
	  <p>This film is Finding Dory</p>
	  <p> <a href="movie2.php" class="btn btn-primary" role="button">Book Now</a></p>
	</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <span class="glyphicon glyphicon-film"></span> Civil War</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"><p>This film is Civil War</p>
	  <p> <a href="shop.php" class="btn btn-primary" role="button">Book Now</a></p></div>
    </div>
	</div>
	
	<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <span class="glyphicon glyphicon-film"></span> The Jungle Book</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body"><p>This film is The Jungle Book</p>
	  <p> <a href="shop.php" class="btn btn-primary" role="button">Book Now</a></p></div>
    </div>
	</div>
	
	</div>
	
	
</div>
</div>	
</div>



<!-- Coming Soon Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Due and New</h2>
	  <h2>Releases</h2>
      <hr>
	</div>
	<div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web" class="active">In Cinemas</a></li>
            <li><a href="#" data-filter=".app" class="active">Coming Soon</a></li>
			
            <!--<li><a href="#" data-filter=".branding">Horror</a></li>-->
			
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/deadpool.png" title="Watch the Deadpool movie in one of out movie theatres" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Deadpool</h4> <!--Already out-->
                <small>Currently Out</small> </div>
              <img src="img/FilmImages/Small/deadpool.png" class="img-responsive" alt="Deadpool"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/spiderman.png" title="This film will be in cinemas soon" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Spiderman Homecoming</h4> <!--Coming Soon-->
                <small>Out Soon</small> </div>
              <img src="img/FilmImages/Small/spiderman.png" class="img-responsive" alt="Spiderman Homecoming"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/junglebook.png" title="Watch the Jungle Book movie in one of out movie theatres" rel="prettyPhoto">
              <div class="hover-text">
                <h4>The Jungle Book</h4> <!--Already out-->
                <small>Currently Out</small> </div>
              <img src="img/FilmImages/Small/junglebook.png" class="img-responsive" alt="The Jungle Book"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/civilwar.png" title="Watch the Civil War movie in one of out movie theatres" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Civil War</h4> <!--Already out-->
                <small>Currently Out</small> </div>
              <img src="img/FilmImages/Small/civilwar.png" class="img-responsive" alt="Captain America Civil War"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/pirates.png" title="This film will be in cinemas soon" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Pirates of the Caribbean: Dead Men Tell No Tales</h4> <!--Coming Soon-->
                <small>Out Soon</small> </div>
              <img src="img/FilmImages/Small/pirates.png" class="img-responsive" alt="Pirates of the Caribbean: Dead Men Tell No Tales"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/findingdory.png" title="Watch the Finding Dory movie in one of out movie theatres" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Finding Dory</h4> <!--Already out-->
                <small>Currently Out</small> </div>
              <img src="img/FilmImages/Small/findingdory.png" class="img-responsive" alt="Finding Dory"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/guardians.png" title="This film will be in cinemas soon" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Guardians of the Galaxy Vol. 2</h4> <!--Coming Soon-->
                <small>Out Soon</small> </div>
              <img src="img/FilmImages/Small/guardians.png" class="img-responsive" alt="Guardians of the Galaxy Vol. 2"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/FilmImages/Large/starwars.png" title="This film will be in cinemas soon" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Star Wars VIII</h4> <!--Coming Soon-->
                <small>Out Soon</small> </div>
              <img src="img/FilmImages/Small/starwars.png" class="img-responsive" alt="Spiderman Homecoming"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- News Section -->
<div id="portfolio" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>News</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
				<h4>
					<p>&nbsp</p>
					15/11/2016 <br>
                
                </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Water Damage</h4>
                <h4 class="subheading">Edinburgh Theatre Suffers From Watter Damage</h4>
              </div>
              <div class="timeline-body">
                <p>The cinema in edinburgh has had a burst water pipe in theatre A which means that it will have to be closed for a long whilke as it gets fixed.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>
					<p>&nbsp</p>
					15/11/2016 <br>
                
                </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Creative Agency</h4>
                <h4 class="subheading">Front-end Developer</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>
					<p>&nbsp</p>
					15/11/2016 <br>
                
                </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Creative Agency</h4>
                <h4 class="subheading">UX Designer</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title center">
      <h2>Updates</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          
          <!-- News Part 2 Section-->
          
          <li>
            <div class="timeline-image">
              <h4>2016 <br>
                - <br>
                2017 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>New Chairs</h4>
                <h4 class="subheading">New chairs in the Edinburgh Cinema</h4>
              </div>
              <div class="timeline-body">
                <p>Screen 1 in the Edinburgh ICinema is getting new leather seats and sofas in to allow for people who watch a screeing in this room to enough the luxury of leather.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2016 <br>
                - <br>
                2017 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>New Cinema</h4>
                <h4 class="subheading">A New Cinema Has Been Built</h4>
              </div>
              <div class="timeline-body">
                <p>A new cinema has been built in Kelso which allows for more people to view movies in our quality theatres.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>2015 <br>
                - <br>
                2016 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>New Food</h4>
                <h4 class="subheading">New Food Has Been Added To All Cinemas</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">New food has been added to all the cinemas we own ast we want to encourage healthier eating, therefore we have added pre-made bowls of salad and fruit availiable where you would usually buy food.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- Reviews Section -->
<div id="contact" align="center">
	<div class="container" align="center">
	<div class="section-title text-center center">
      <h2>Reviews</h2>
    <hr>
    </div>
		<a href="forum.php" class="btn btn-default btn-lg page-scroll">View Reviews</a>
		<a href="post.php" class="btn btn-default btn-lg page-scroll">Add Review</a>
	</div>
</div>



<!-- Contact Section -->
<div id="a" class="text-center">
  <div class="container">
    <div class="section-title">
	<p>&nbsp</p>
      <h2>Locations</h2>
      <hr>
    </div>
		<style>
			.map-responsive{
			overflow:hidden;
			padding-bottom:56.25%;
			position:relative;
			height:0;
		}
		.map-responsive iframe{
			left:0;
			top:0;
			height:100%;
			width:100%;
			position:absolute;
		}
		</style>
    <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21256.2602271736!2d
	-3.2046207069678596!3d55.94436052839015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m
	2!1s0x0%3A0x727effa719ebb0e3!2sUsher+Hall!5e0!3m2!1sen!2suk!4v1482316994776" 
	width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
  </div> 
</div>


<p>&nbsp</p>
	<hr>

<!--Footer Section-->
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>
          	  
      		
      </p>
    </div>
  </div>
</div>


	
	


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>