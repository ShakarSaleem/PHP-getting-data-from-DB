<?php

$servername = "localhost";
$username = "NAME OF USER FOR THE THE DATABASE";
$password = "PASSWORD OF USER FOR THE THE DATABASE";
$dbname = "NAME OF DATABASE USED";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		echo "connected successfully";

$sql = "SELECT ROW1,ROW2... FROM tableName";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "COLUMNNAME " . $row["COLUMNNAME"]. " COLUMNNAME2: " . $row["COLUMNNAME2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
