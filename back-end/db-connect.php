
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPortfolio"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "No db connection";
    die(json_encode(['error' => $conn->connect_error]));
}
else{
   echo 'Database connected successfully';
}

?>
