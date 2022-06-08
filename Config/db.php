<!-- For username, password and dbname, input the data you wish to work with  -->
<!-- username is the database created username(s) -->
<!-- password, input the password declared for the specific username -->
<!-- dbname, input name of the database you would wish to work with -->
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "Church";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
