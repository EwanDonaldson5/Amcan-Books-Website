<?php
  # Access session.
    session_start() ;

    # Redirect if not logged in.
    if ( !isset( $_SESSION[ 'user_id' ] ) ) { 
        require ( 'login_tools.php' ) ; 
        load() ; 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amcan Books</title>
    <link rel="shortcut icon" type="image/png" href="../favicon.png"/>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body id="page-top" class="index" style="min-width:100%;">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Amcan Books</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Books</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../display.php">Return</a>
                    </li>
                    <li class="page-scroll">
                        <a href="includes/goodbye.php">Sign Out</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="../images/AmcanLogo.png" alt="" style="max-width:20%;min-width:20%">
                    <div class="intro-text">
                        <h1 class="name">Amcan Books</h1>
                        <hr class="star-light">
                        <span class="skills">History - Geography - Cooking - Best Sellers</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php # DISPLAY SHOPPING CART PAGE.

# Set page title and display header section.
$page_title = 'Reservation' ;
//include ( 'headerdefault.php' ) ;

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
    if ( $item_qty == 0 ) { unset ($_SESSION['cart'][$item_id]); } 
    elseif ( $item_qty > 0 ) { $_SESSION['cart'][$item_id]['quantity'] = $item_qty; }
  }
}

# Initialize grand total variable.
$total = 0; 

# Display the cart if not empty.
if (!empty($_SESSION['cart']))
{
  # Connect to the database.
  require ('connect_db.php');
  
  # Retrieve all items in the cart from the 'shop' database table.
  $q = "SELECT * FROM shop WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  # Display body section with a form and a table.
  echo '<div class="container style="padding-top: 50px;">
            
                
         <form action="cart.php" method="post"><table><tr><th colspan="5"><h1>Reservation</h1></th></tr><tr>
        </div>
      </div>
    </div>
    ';
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    # Calculate sub-totals and grand total.
    $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
    $total += $subtotal;

    # Display the row/s:
  echo '<table class="table">';
    echo "<thead><tr><th>{$row['item_name']}</th></tr></thead> 
  <tbody><td>{$row['time']} </td></tr>
    <tr><td>{$row['desc']}</td>
  <td> <input type=\"text\" size=\"3\" name=\" qty[{$row['item_id']}]\" value=\" {$_SESSION['cart'][$row['item_id']]['quantity']}\"></td>
    <td> @ </td> <td> {$row['item_price']} = </td> <td> " .number_format ($subtotal, 2). " </td> </tr></tbody></table>";
  }
   # Display the total.
  echo ' <form><table><thead><tr><th> Total = '.number_format($total,2).'</th></tr><thead>
    </table>
    <div class"container">
    <p><input type="submit" name="submit" class="btn btn-primary" value="Update My Cart">
    <a href="checkout.php?total='.$total.'" class="btn btn-primary" role="button">Continue Reservation</a></p>
    </div></form>';
}
else
# Or display a message.
{ echo '<br><br><div class="container"><h2>Your cart is currently empty.</h2></div>' ; }


 ?>

</body>
</html>

<?php
include ('footer_white_space.php') ;
?>