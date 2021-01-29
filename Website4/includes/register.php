<?php # DISPLAY COMPLETE REGISTRATION PAGE.

# Set page title and display header section.
$page_title = 'Register' ;

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

 # Check for a first name.
  if (empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }
  

  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass' ] ) )
  {
    if ( $_POST[ 'pass' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  # Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM users WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'User name already being used. Please re-enter user name' ;
  }
  
  # On success register user inserting into 'users' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) VALUES ('$fn', '$ln','$e', SHA1('$p'), NOW() )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { 
      header('Location: login.php');
    }
  
    # Close database connection.
    mysqli_close($link); 

   
    exit();
  }
  # Or report errors.
  else 
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>


<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<title>Register</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="main" style="margin-top:5%"> 	

		<form name="loginform" id="loginform" action="#" method="post" class="wpl-track-me" style="height:450px">

			<h1 class="name">Register</h1>

			<p class="login-firstname">
				<input type="text" name="first_name" class="input form-control" style="text-align:center;"  placeholder="First Name" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
			</p> 

			<p class="login-lastname" style="margin-top:5%">
				<input type="text" name="last_name" class="input form-control" style="text-align:center;"  placeholder="Last Name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
			</p> 

			<p class="login-username" style="margin-top:5%">
				<input type="text" name="email" class="input form-control" style="text-align:center;" placeholder="Email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
			</p> 

			<p class="login-password"> 
				<input type="password" name="pass" class="input form-control" style="text-align:center;" placeholder="Password" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" >
			</p> 

			<p class="login-password"> 
				<input type="password" name="pass2" class="input form-control" style="text-align:center;" placeholder="Confirm Password"value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">
			</p> 

			<p class="login-submit"><input type="submit" name="wp-submit" id="wp-submit" class="submitbutton button-primary" value="Login" />
			</p> 

			<h3 class="message">Got an account? <a href="login.php">Login here</a></h3>

			<?php
				# Display any error messages if present.
				if ( isset( $errors ) && !empty( $errors ) )
				{
				 echo '<h3 id="err_msg">Oops! There was a problem:<br>' ;
				 #foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
				 echo 'Please try again or Register</h3>' ;
				}
			?>

		</form> 
	</div>
</body>
</html>