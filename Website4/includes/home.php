<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Home' ;
include ( 'header.html' ) ;

# Display body section.
echo "<h1>You are now logged in</h1><p>  {$_SESSION['first_name']}  {$_SESSION['last_name']}  </p>";
?>

<section>
<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead">Welcome To The Coffee Shop!</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<h3><a href="shop.php">Menu</a> | <a href="forum.php">Forum</a> | <a href="goodbye.php">Logout</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>
</section>

