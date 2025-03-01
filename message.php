<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "chatBot";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";

// getting user message throught ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// cheking user query to database query
$check_data = "SELECT replies FROM chatBot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error run query");





?>