<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Sign up</title>
    </head>
    <body>
        <?php
            if (isset($_GET['First_name']) && isset($_GET['Last_name']) && isset($_GET['Email']) && isset($_GET['Password']) ) {
 

                if (!empty($_GET['First_name']) && !empty($_GET['Last_name']) && !empty($_GET['Email']) && !empty($_GET['Password'])) {

                    $x = $_GET['First_name'];
                    $y = $_GET['Last_name'];
                    $z = $_GET['Email'];
                    $s = $_GET['Password'];

                    echo "test";
        $conn = mysqli_connect("localhost:3306", "root", "","website") OR die("Erreur de connection");

        
        $myq = "INSERT INTO marjane VALUES('".$x ."','". $y."','". $z."','". $s."')";
    
        $result = mysqli_query($conn, $myq);

        echo "Vos donn&eacute;es sont sauvegard&eacute;es.";

    mysqli_close($conn);

            header("Location: Marjane_afterlogin.html");
                }
            }
        ?>
    </body>
</html>