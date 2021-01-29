<?php # DISPLAY SHOPPING CART PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Reservation' ;
include ( 'header6.html' ) ;

# Open database connection.
require ( 'connect_db.php' ) ;

echo '<div class="container">
		<h1><i class="fa fa-book" aria-hidden="true"></i> Your Reservation</h1>'; 
echo "{$_SESSION['first_name']}  {$_SESSION['last_name']}";

# Retrieve items from 'movie2' database table.
$q = "SELECT * FROM orders" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
  
  

  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
    echo '<div class="container"><table class="table table-hover"><thead><tr><th>' . $row['order_id'] . '</th><th>' . $row['total'] . '</th><th>'  . $row['order_date'] . '</th>';
  }
  
  echo '</tbody></table>';
  
  # Close database connection.
  mysqli_close( $link ) ; 
}

?>