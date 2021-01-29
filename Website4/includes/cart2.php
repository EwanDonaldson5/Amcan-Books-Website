<?php # DISPLAY SHOPPING CART PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Reservation' ;
include ( 'header2.php' ) ;

# Check if form has been submitted for update.
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
  # Update changed quantity field values.
  foreach ( $_POST['qty'] as $item_id => $item_qty )
  {
    # Ensure values are integers.
    $id = (int) $item_id;
    $qty = (int) $item_qty;

    # Change quantity or delete if zero.
    if ( $qty == 0 ) { unset ($_SESSION['cart2'][$id]); } 
    elseif ( $qty > 0 ) { $_SESSION['cart2'][$id]['quantity'] = $qty; }
  }
}

# Initialize grand total variable.
$total = 0; 

# Display the cart if not empty.
if (!empty($_SESSION['cart2']))
{
  # Connect to the database.
  require ('connect_db.php');
  
  # Retrieve all items in the cart from the 'movie2' database table.
  $q = "SELECT * FROM movie2 WHERE item_id IN (";
  foreach ($_SESSION['cart2'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  # Display body section with a form and a table.
  echo '<div class="container">
            
                
				 <form action="cart2.php" method="post"><table><tr><th colspan="5"><h1>Reservation</h1></th></tr><tr>
				</div>
			</div>
		</div>
	  ';
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    # Calculate sub-totals and grand total.
    $subtotal = $_SESSION['cart2'][$row['item_id']]['quantity'] * $_SESSION['cart2'][$row['item_id']]['price'];
    $total += $subtotal;

    # Display the row/s:
	echo '<table class="table">';
    echo "<thead><tr><th>{$row['item_name']}</th></tr></thead> 
	<tbody><td>{$row['time']} </td></tr>
    <tr><td>{$row['desc']}</td>
	<td> <input type=\"text\" size=\"3\" name=\" qty[{$row['item_id']}]\" value=\" {$_SESSION['cart2'][$row['item_id']]['quantity']}\"></td>
    <td> @ </td> <td> {$row['item_price']} = </td> <td> " .number_format ($subtotal, 2). " </td> </tr></tbody></table>";
  }
   # Display the total.
  echo ' <form><table><thead><tr><th> Total = '.number_format($total,2).'</th></tr><thead>
		</table>
		<div class"container">
		<p><input type="submit" name="submit" class="btn btn-primary" value="Update My Cart">
		<a href="checkout2.php?total='.$total.'" class="btn btn-primary" role="button">Continue Reservation</a></p>
		</div></form>';
}
else
# Or display a message.
{ echo '<div class="container"><h2>Your cart is currently empty.</h2>' ; }
  
include ( 'footer.html' ) ;

 ?>

</body>
</html>


