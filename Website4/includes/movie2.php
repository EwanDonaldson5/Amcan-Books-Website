<?php # DISPLAY COMPLETE PRODUCTS PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Movie Reservation' ;
include ( 'header2.php' ) ;

# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve items from 'movie2' database table.
$q = "SELECT * FROM movie2" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
  # Display body section.
  # Display body section.
echo '<div class="container">
		<h1><i class="fa fa-user" aria-hidden="true"></i> Choose Your Movie</h1>'; 
echo "{$_SESSION['first_name']}  {$_SESSION['last_name']}";

  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
    echo '<div class="container"><table class="table table-hover"><thead><tr><th>' . $row['item_name'] . '</th><th>' . $row['desc'] . '<th></tr></thead><tbody><tr><td>'  . $row['time'] . '</td><td><a href="added2.php?id='.$row['item_id'].'">Reserve</a></tr></td>';
  }
  
  echo '</tbody></table>';
  
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>There are currently no items in this shop.</p>' ; }

?>