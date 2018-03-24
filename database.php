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
$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];
echo $name."<br>";
echo $pass."<br>";

$query = "insert into emp values('$name','$pass')";
echo "Query->".$query."<br>";

if (mysqli_query($dbconnection, $query)) {
    echo "<br>Inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconnection);
} 

?>

