<?php 

$mysqli = new mysqli("localhost", "root", "", "formulario");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$year=$_POST['year'];

     $sql = "INSERT INTO usuarios (email,password,year) VALUES ('$email','$password','$year')";
 
     if (mysqli_query($mysqli, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
     }

}



$mysqli->close();

?>