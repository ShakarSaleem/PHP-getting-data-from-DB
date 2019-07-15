<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "switchdata";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		echo "connected successfully";

$sql = "SELECT sw, p1, p3, p3,p4 FROM switchTable";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "sw: " . $row["sw"]. " - p1: " . $row["p1"]. " - p2: " . $row["p2"]. " - p3: " . $row["p3"]. " - p4: " . $row["p4"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
