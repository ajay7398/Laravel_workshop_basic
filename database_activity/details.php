<?php

    if( ! isset($_GET["id"]) ) {
        header("location: show2.php");
        exit;
    }
   
    if( ! ctype_digit($_GET["id"]) ) {
        header("location: show2.php");
        exit;
    }

    $link = mysqli_connect("localhost", "root", "", "register") or die ( mysqli_connect_error() );

    $q = "select * from user where id = ".$_GET["id"];


    $res = mysqli_query($link, $q) or die (mysqli_error($link));

    if(mysqli_num_rows($res) != 1) {
        header("location: show2.php");
        exit;
    }

    $row = mysqli_fetch_assoc($res);

?><html>
    <body>
        <h1>User Details</h1>
        <hr>
        Name: <?php echo $row["name"] ?> <br>
        Email: <?php echo $row["email"] ?> <br>
        Password: <?php echo $row["password"] ?> <br>
    </body>
</html>