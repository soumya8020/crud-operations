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
	echo "Databae connected<br> ";
}


$query = "select * from emp";
$result = mysqli_query($dbconnection, $query);
echo $query."<br>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>"."Name: " . $row["name"]. "<br>" ." Password: " . $row["pass"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
