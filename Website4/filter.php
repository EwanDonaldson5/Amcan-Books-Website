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


    $counter = "1"; 

        
        
?>


<?php

        while ($row = mysqli_fetch_array( $r, MYSQLI_ASSOC )) {         
            
            $a[] = ($row['item_name']);
            
            $counter++;

        } ;

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>