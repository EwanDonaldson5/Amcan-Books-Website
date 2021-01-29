<?php # PROCESS MESSAGE POST.

# Access session.
session_start();

# Make load function available.
require ( 'login_tools.php' ) ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { load() ; }

# Set page title and display header section.
$page_title = 'Post Error' ;
include ( 'headerdefault.php' ) ;

# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  # Check Subject and Message Input.
  if ( empty($_POST['movie'] ) ) { echo '<p>Please enter movie name for this post.</p>'; }
  if ( empty($_POST['comment'] ) ) { echo '<p>Please enter a comment for this post.</p>'; }

  # On success add post to forum database.
  if( !empty($_POST['movie']) &&  !empty($_POST['comment']) )
  {
    # Open database connection.
    require ( 'connect_db.php' ) ;
  
    # Execute inserting into 'forum' database table.
    $q = "INSERT INTO forum(first_name,last_name,movie,comment,post_date) 
          VALUES ('{$_SESSION['first_name']}','{$_SESSION['last_name']}','{$_POST['movie']}','{$_POST['comment']}',NOW() )";
    $r = mysqli_query ( $link, $q ) ;

    if ( mysqli_affected_rows( $link ) != 1 )
	{
	  echo '<p>Your message has now been posted.</p>'.mysqli_error( $link);
	}
	  else
	  {
	  load( 'forum.php' );
	  }

    
    # Close database connection.
    mysqli_close( $link ) ; 
    }
 } 
 

 


?>