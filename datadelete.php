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


$sql = "DELETE FROM emp WHERE pass='a'";

if (mysqli_query($dbconnection, $sql)) {
    echo "<br>Row deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($dbconnection);
?>
