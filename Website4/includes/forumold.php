<?php # DISPLAY COMPLETE FORUM PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Forum' ;
include ( 'headerdefault999.php' ) ;

# Open database connection.
require ( 'connect_db.php' ) ;
echo '<div class="container">
		<div class="page-header">
			<h1><span class="fa fa-users" aria-hidden="true"></span> Movie Reviews</h1>
		</div>	
           
';

# Display body section, retrieving from 'forum' database table.
$q = "SELECT * FROM forum" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
  echo '<table class="table">';
  echo '<thead><th> Posted By </th><th> Date of Post </th><th> Subject </th><th id="msg"> Message </th></tr></thead>';
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
    echo '<tbody><tr><td>' . $row['first_name'] .'  '. $row['last_name'].'</td>
	<td>' . $row['post_date'].'</td>
    <td>' . $row['movie'] . '</td>
	<td>' . $row['comment'] . '</td> </tr>';
  }
  
}
else { echo '<p>There are currently no messages.</p>' ; }

echo '</table> 
			<div class="container">
                <a href="post.php" class="btn btn-primary" role="button">Post Message</a>
			</div>	' ;

# Close database connection.
mysqli_close( $link ) ;
  

?>




