<?php

$dbServername="mysql.spinawebpage.com";
$dbUsername="spinawe_david";
$dbPassword="dv0863257";
$dbname="spinawe_ironviking";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>