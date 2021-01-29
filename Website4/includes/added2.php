
<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Reservation Addition' ;
include ( 'header2.php' ) ;

# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve selective item data from 'movie2' database table. 
$q = "SELECT * FROM movie2 WHERE item_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one of this product id.
  if ( isset( $_SESSION['cart2'][$id] ) )
  { 
    # Add one more of this product.
    $_SESSION['cart2'][$id]['quantity']++; 
    echo '<div class="container"><h3> '.$row["desc"].' ticket of the '.$row["time"].' showing of '.$row["item_name"].' has been reserved.</h3>';
  } 
  else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart2'][$id]= array ( 'quantity' => 1, 'price' => $row['item_price'] ) ;
    echo '<div class="container"><h3>'.$row["desc"].' ticket of the '.$row["time"].' showing of '.$row["item_name"].' has been reserved</h3>' ;
  }
}

# Close database connection.
mysqli_close($link);

# Create navigation links.
echo '<div class="container">
		<div class="page-header">
            <p> <a href="movie2.php" class="btn btn-primary" role="button">Add Another Ticket</a> <a href="cart2.php" class="btn btn-primary" role="button">View Reservation</a></p>
		</div>
	   </div>' ;
		
include ( 'footer.html' ) ;
?>