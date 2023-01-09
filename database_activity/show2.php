<?php

    $link = mysqli_connect("localhost", "root", "", "register") or die ( mysqli_connect_error() );

    $q = "select * from user order by name";

    $res = mysqli_query($link, $q) or die (mysqli_error($link));


?><html>
    <body>
        <h1>User List</h1>
        <hr>
        <table width="600" border="1" align="center">
            <tr>
                <td></td>
                <td widht="31%">Name</td>
                <td widht="31%">Email</td>
                <td widht="31%">Password</td>
            </tr>
            <?php

               while($row = mysqli_fetch_assoc($res)) {

                    echo '
                    <tr>
                        <td><a href="details.php?id='.$row["id"].'">More</a></td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["password"].'</td>
                    </tr>
                    ';
               }

            ?>               
            
        </table>
    </body>
</html>