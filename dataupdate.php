<?php
$sname="localhost";
$uname="root";
$pass="aissel123";
$dbname="mysql";

$dbconnection = mysqli_connect($sname,$uname,$pass,$dbname);

if (!$dbconnection) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Databae connected <br>";
}


$sql = "UPDATE emp SET name='anusha' WHERE pass='8020'";
echo "Query->".$sql;
if (mysqli_query($dbconnection, $sql)) {
    echo "<br>Record updated successfully";
} else {
    echo "Not Updated ";
}

mysqli_close($dbconnection);
?>
