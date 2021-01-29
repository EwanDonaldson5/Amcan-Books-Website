<?php # DISPLAY CHECKOUT PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Checkout' ;
include ( 'header2.php' ) ;

# Check for passed total and cart.
if ( isset( $_GET['total'] ) && ( $_GET['total'] > 0 ) && (!empty($_SESSION['cart2']) ) )
{
  # Open database connection.
  require ('connect_db.php');
  
  # Store buyer and order total in 'orders' database table.
  $q = "INSERT INTO orders ( user_id, total, order_date ) VALUES (". $_SESSION['user_id'].",".$_GET['total'].", NOW() ) ";
  $r = mysqli_query ($link, $q);
  
  # Retrieve current order number.
  $order_id = mysqli_insert_id($link) ;
  
  # Retrieve cart items from 'movie2' database table.
  $q = "SELECT * FROM movie2 WHERE item_id IN (";
  foreach ($_SESSION['cart2'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  # Store order contents in 'order_content' database table.
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    $query = "INSERT INTO order_content ( order_id, item_id, quantity, price )
    VALUES ( $order_id, ".$row['item_id'].",".$_SESSION['cart2'][$row['item_id']]['quantity'].",".$_SESSION['cart2'][$row['item_id']]['price'].")" ;
    $result = mysqli_query($link,$query);
  }
  
  # Close database connection.
  mysqli_close($link);

  # Display order number.
  echo '<div class="container"> 
	<div class="page-header">
	  <h1><span class="fa fa-ticket" aria-hidden="true"></span> Thanks for your reservation  ';

  echo "{$_SESSION['first_name']}  {$_SESSION['last_name']}";	
  echo "<h4>Your reservation number is #".$order_id.". Your tickets will be ready for collection at the box office.</h4>";

  # Remove cart items.  
  $_SESSION['cart2'] = NULL ;
}
# Or display a message.
else { echo '<p>There are no items in your cart.</p>' ; }

include ( 'footer.html' ) ;
?>