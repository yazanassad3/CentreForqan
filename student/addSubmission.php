<?php 

$id_assign = $_POST['id_assign'];
$description = $_POST['description'];

function addAnswer($id, $answer){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    
    // Escaping user input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $id);
    $answer = mysqli_real_escape_string($conn, $answer);
    
    $query = "INSERT INTO `answers` (`id_assign`, `description`) VALUES ('$id','$answer')";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    // Close the database connection
    mysqli_close($conn);
}

// Call the function with correct parameters
addAnswer($id_assign, $description);

?>











?>