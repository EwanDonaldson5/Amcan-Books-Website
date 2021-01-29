<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'linking.html' ) ;

?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<title>Sign In</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="main" style="margin-top:5%;width:100%"> 	

		<div id="loginform" style="width:190px;height:300px">
			<form action="login_action.php" method="post" style="width:100%">
			<p>Login</p>
				<table style="width:100%" align="center">
					<tr align="center">
						<td>
							
							<div class="form-group" style="text-align:center;">
								<input type="text" class="form-control input" placeholder="Email" name="email" style="text-align:center;margin-top:10%;width:100%">
							</div>
						</td>
					</tr>
					<tr align="center">
						<td>
							<div class="form-group" style="text-align:center;">
								<input type="password" class="input form-control" placeholder="Password" name="pass" style="text-align:center;margin-top:10%"></h3>
							</div>	
						</td>
					</tr>
					<tr align="center">
						<td>	
							<div class="form-group" style="text-align:center;">	
							<p class="login-submit">
							<input type="submit" value="Login" class="submitbutton button-primary" style="z-index:-1;margin-top:10%">
							</p> 
							</div>
						</td>
					</tr>
				</table>
			</form>
			<h3 class="message">Not registered? <a href="register.php">Create an account</a></h3>

			<?php
				# Display any error messages if present.
				if ( isset( $errors ) && !empty( $errors ) )
				{
				 echo '<h3 id="err_msg">Oops! There was a problem:<br>' ;
				 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
				 echo 'Please try again or Register</h3>' ;
				}
			?>

		</div>		

			

		</form> 
	</div>
</body>
</html>