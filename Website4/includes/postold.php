<?php # DISPLAY POST MESSAGE FORM.

# Access session.
session_start() ;


# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

$page_title = 'Post Message' ;
include ( 'headerdefault.php' ) ;


# Display form.
echo '<div class="container">
		<div class="color">
				<form action="post_action.php" method="post" accept-charset="utf-8">
					<input name="movie" type="text" class="form-control" placeholder="Movie Name">
			<br>
					<textarea class="form-control" name="comment" rows="5" placeholder="Comment"></textarea></h3>
			<br>
					<input type="submit" value="Post Review" class="btn btn-primary">
					
				</form>
		</div>
	  </div>';
	  
?>

<style>
#label{
	font-color: #ffffff
}
</style>

  </div>
</div>

<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/easypiechart.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
