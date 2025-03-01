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
$check_data = "SELECT replies FROM chat WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error run query");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0) {
// fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    // storing replay to a variable which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "Sorry, can't be able to undestand you!";
}


?>