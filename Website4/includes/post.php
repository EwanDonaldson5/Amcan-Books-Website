<?php # DISPLAY POST MESSAGE FORM.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Post Message' ;
include ( 'headerdefault.php' ) ;

# Display form.
echo '<div class="container">
		<div class="form-group">
  			<label for="movie">Movie:</label>
				<form action="post_action.php" method="post" accept-charset="utf-8">
					<input name="movie" type="text" class="form-control" ""placeholder="Movie Name">
			
			
					<label for="comment">Please leave a comment:</label>
					<textarea class="form-control" name="comment" rows="5" placeholder="Comment"></textarea></h3>
			<br>
					<input type="submit" value="Post Review" class="btn btn-primary">
				</form>
			</div>
	  </div>';



?>