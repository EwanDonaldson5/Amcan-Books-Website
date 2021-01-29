<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'linking.html' ) ;

?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="2;URL='login.php'">
<title>Sign In</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<?php # DISPLAY COMPLETE LOGGED OUT PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

?>

<?php

# Set page title and display header section.
$page_title = 'Goodbye' ;
include ( '' ) ;

# Clear existing variables.
$_SESSION = array() ;
  
# Destroy the session.
session_destroy() ;

?>

<div id="main" style="margin-top:0%;width:100%"> 	
	<div id="loginformm" style="width:80%;height:5%">
		<form action="login_action.php" method="post" style="width:100%">

			<?php

			# Display body section.
			echo '<div class="container" style="width:100%">
					<div class="text-center" style="width:100%">
					<h1>Goodbye!</h1><h3>You are now logged out.</h1>
				  </div>' ;

			?>  

		</form>
	</div>
</div>

