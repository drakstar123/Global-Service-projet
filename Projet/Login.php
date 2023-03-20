<?php
session_start();

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "website";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


if (!$conn) {

    echo "Connection failed!";

}



if (isset($_POST['Email']) && isset($_POST['Password'])) {
	function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
	}

	$uname= validate($_POST['Email']);
	$password= validate($_POST['Password']);

	if (empty($uname)) {
        header("Location: Error.php?error=User Name is required");
        exit();

	}else if(empty($password)){
        header("Location: Error.php?error=Password is required");
        exit();

    }else{ 
        $sql = "SELECT * FROM marjane WHERE Email='$uname' AND Password='$password'";
 		$result = mysqli_query($conn, $sql);
 		if (mysqli_num_rows($result) === 1) {
 			$row = mysqli_fetch_assoc($result);
 			if ($row['Email']===$uname && $row['Password']===$password) {
 				$_SESSION['Email'] = $row['Email'];
                $_SESSION['First_name'] = $row['First_name'];
                $_SESSION['Last_name'] = $row['Last_name'];
 				$_SESSION['Password'] = $row['Password'];
 				header("location: Marjane_afterlogin.html");
 				exit();
 			}else{
 				header("Location: Error.php?error=incorrect username or password");
        		exit();
 			}
 		}else{
 			header("Location: Error.php?error=incorrect username or password");
        	exit();
 		}
    } 

} else {
	header("location: Error.php");
	exit();
}

?>