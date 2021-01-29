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
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

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
                        <a href="includes/cart.php">Cart</a>
                    </li>
                    <?php
                        # Open database connection.
                        require ( 'includes/connect_db.php' ) ;

                        /* check connection */
                        if (mysqli_connect_errno()) {
                            printf("Connect failed: %s\n", mysqli_connect_error());
                            exit();
                        }

                        if ($result = mysqli_query($link, "SELECT * FROM shop")) {

                            /* determine number of rows result set */
                            $row_cnt = mysqli_num_rows($result);

                            /* close result set */
                            mysqli_free_result($result);
                        }

                        $q = "SELECT * FROM users" ;
                        $r = mysqli_query( $link, $q ) ;


                        $counter = "1"; 
                        
                        $user_id = $_SESSION[ 'user_id' ];

                        if ($user_id == "01"){
                            ?>
                            <li class="page-scroll">
                                <a href="admin.php">Admin</a>
                            </li>
                            <?php
                        };
                    ?>
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
                    <img class="img-responsive" src="images/AmcanLogo.png" alt="" style="max-width:20%;min-width:20%">
                    <div class="intro-text">
                        <h1 class="name">Amcan Books</h1>
                        <hr class="star-light">
                        <span class="skills">History - Geography - Cooking - Best Sellers</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!------------------------------------------- Portfolio Modals -->
    <?php
                
        # Open database connection.
                require ( 'includes/connect_db.php' ) ;

                /* check connection */
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                if ($result = mysqli_query($link, "SELECT * FROM shop")) {

                    /* determine number of rows result set */
                    $row_cnt = mysqli_num_rows($result);

                    /* close result set */
                    mysqli_free_result($result);
                }

                $q = "SELECT * FROM shop" ;
                $r = mysqli_query( $link, $q ) ;

                $all_categories_query = "SELECT category FROM `shop` GROUP BY category ORDER BY category" ;
                $all_categories = mysqli_query( $link, $all_categories_query ) ;
                
                if (isset($_POST['var'])) {} 
                $placeholder = $_POST['var'];
                $placeholderchecked = mysql_real_escape_string($placeholder);
                $queryfilter = "SELECT * FROM `shop` WHERE category LIKE '$placeholderchecked'";

                $filterresult = mysqli_query( $link, $queryfilter ) ;


            $counter = "1"; 

            while ($row = mysqli_fetch_array( $filterresult, MYSQLI_ASSOC )) {         
                
                ?>

                   <div class="portfolio-modal modal fade" id="<?php echo "portfolioModal$counter" ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="modal-body">
                                        <h2><?php echo $row['item_name'] ?></h2>
                                        <hr class="star-primary">
                                        <img src="<?php echo $row['image'] ?>" class="img-responsive img-centered" alt="" style="width:20%;">
                                        <p><?php echo $row['blurb'] ?></p>
                                        <ul class="list-inline item-details">
                                            <li>Client:
                                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                                </strong>
                                            </li>
                                            <li>Date:
                                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                                </strong>
                                            </li>
                                            <li>Service:
                                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                                </strong>
                                            </li>
                                        </ul>
                                        <table>
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                
                <?php
                $counter++;

            } ;
        
    ?>




    <!----------------------------------------- Books Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Books</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

            <?php
                
                # Open database connection.
                require ( 'includes/connect_db.php' ) ;

                /* check connection */
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                if ($result = mysqli_query($link, "SELECT * FROM shop")) {

                    /* determine number of rows result set */
                    $row_cnt = mysqli_num_rows($result);

                    /* close result set */
                    mysqli_free_result($result);
                }

                $q = "SELECT * FROM shop" ;
                $r = mysqli_query( $link, $q ) ;

                $all_categories_query = "SELECT category FROM `shop` GROUP BY category ORDER BY category" ;
                $all_categories = mysqli_query( $link, $all_categories_query ) ;
                $queryfilter = "SELECT * FROM `shop`";

                if( $user_search == "")
                {
                    $user_search = "%";
                    $queryfilter = "SELECT * FROM `shop` WHERE category LIKE '%' AND item_name LIKE '%$user_search%'";
                }

                $user_search = $_POST["book_name"];
                
                
                if (isset($_POST['var'])) {
                    if ($user_search == ""){
                        $user_search = "%";
                    }
                    $placeholder = $_POST['var'];
                    $placeholderchecked = mysql_real_escape_string($placeholder);
                    $queryfilter = "SELECT * FROM `shop` WHERE category LIKE '$placeholderchecked' AND item_name LIKE '%$user_search%'";    
                }

                $filterresult = mysqli_query( $link, $queryfilter ) ;


                $counter = "0";
                ?>
                <div id="functions">

                    <form action="" method="POST">
                    <table style="width:100%">
                        <tr>
                            <td style="padding-bottom:5px;padding-left:5px">
                                <input type="text" name="book_name" class="form-control input" style="height:30px;width:20%;min-width:175px;" placeholder="Search for a Book Here...">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-bottom:5px;padding-left:5px">
                                <select name="var" class="form-control input" style="height:30px;width:20%;min-width:175px;" onchange="this.form.submit();">  
                                    <option selected="selected" value="%">Select a Filter...</option>
                                    <option value="%">all</option>
                                    <?php  
                                    while ($row = mysqli_fetch_array( $all_categories, MYSQLI_ASSOC )) {         
                                            
                                        $category[] = ($row['category']);  
                                        $counter++;
                                        ?>
                                        <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                                        <?php
                                        
                                    } ;
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-bottom:5px;padding-left:5px">
                                <input type="submit" name="submit" class="form-control input" value="Submit" style="width:90px" />
                            </td>
                        </tr>
                    </table>
                        
                    </form> 

                </div>

                <?php 
                    $counter = '1'; 
                    
                ?>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                    </ul>
                </div>

                <table class="display" style="width:100%;text-align:center;">
                <col style="width:2.5%;min-width:2.5%;">
                <col style="width:40%;min-width:40%;">
                <col style="width:5%;min-width:5%;">
                <col style="width:30%;min-width:30%;">
                <col style="width:22.5%;min-width:22.5%;">
                <tr>
                    <td colspan="5">

                    <table class="filter" style="width:100%">
                    <col style="width:5%;min-width:70%;">
                    <col style="width:5%;min-width:20%;">
                    <tr>
                        <td></td>
                        <td>
                            
                        </td>
                    </tr>
                    </table>

                    </td>
                </tr>
                <tr>
                <td></td>
                    <td>
                        <h3>Book Title</h3>
                    </td>
                    <td></td>
                    <td>
                        <h3>Author</h3>
                    </td>
                </tr>
                <?php
   
                    while ($row = mysqli_fetch_array( $filterresult, MYSQLI_ASSOC )) {         
                        
                        ?>

                           <div class="col-sm-4h portfolio-item">
                                
                                    <tr>
                                        <td></td>
                                        <td>
                                            <a href="<?php echo "#portfolioModal$counter" ?>" class="portfolio-link" data-toggle="modal">
                                            <h5><?php echo $row['item_name'] ?></h5>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="<?php echo "#portfolioModal$counter" ?>" class="portfolio-link" data-toggle="modal">
                                            <h5><?php echo $row['author'] ?></h5>
                                            </a>
                                        </td>
                                        <td>
                                            <?php
                                            echo '<a href="includes/added.php?id='.$row['item_id'].'"><button type="button" class="btn btn-default" data-dismiss="modal">+ Cart</button></a>';
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <hr style="border: 0;height: 1px;background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);">
                                        </td>
                                    </tr>
                                
                                
                            </div> 
                            
                        
                        <?php
                        $counter++;

                    } ;
                
                
              
            ?>

            </table>
                
            </div>
        </div>
    </section>


    <!-- This popup is for the  cart -->
    <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                
                
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    

</body>

</html>