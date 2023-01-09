<?php
 
    if( empty($_POST["name"]) ) {
        die("Name was empty");
    }

    if( empty($_POST["email"]) ) {
        die("Email was empty");
    }

    if( empty($_POST["password"]) ) {
        die("Password was empty");
    }

    
    $link = mysqli_connect("localhost", "root", "", "register") or die ( mysqli_connect_error() );

    $q = "insert into user (name, email, password) values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."')";


    mysqli_query($link, $q) or die (mysqli_error($link));

    echo "Done.";

?>