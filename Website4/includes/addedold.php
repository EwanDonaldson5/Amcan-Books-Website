
<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Reservation Addition' ;
include ( 'header6.html' ) ;

# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve selective item data from 'shop' database table. 
$q = "SELECT * FROM shop WHERE item_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one of this product id.
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
    # Add one more of this product.
    $_SESSION['cart'][$id]['quantity']++; 
    echo '<div class="container"><h1> '.' Your ticket of the '.$row["time"].' showing of '.$row["item_name"].' has been reserved.</h3>';
  } 
  else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['item_price'] ) ;
    echo '<div class="container"><h1>'.' Your ticket of the '.$row["time"].' showing of '.$row["item_name"].' has been reserved</h1>' ;
  }
}

# Close database connection.
mysqli_close($link);

# Create navigation links.
echo '<div class="container">
		<div class="page-header">
            <p> <a href="shop.php" role="button">Add Another Ticket</a></p>
			<p> <a href="cart.php" role="button">View Reservation</a></p>
		</div>
	   </div>' ;
		
include ( 'footerblank.html' ) ;
?>