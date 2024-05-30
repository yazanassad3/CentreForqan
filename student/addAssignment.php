<?php 
$description = $_POST['description'];
$title = $_POST['title'];
$id_section = $_POST['id_section'];
$deadline = $_POST['deadline'];

function addAssignment($title, $description, $id_section, $deadline){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    
    // Escaping user input to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $id_section = mysqli_real_escape_string($conn, $id_section);
    $deadline = mysqli_real_escape_string($conn, $deadline);
    
    $query = "INSERT INTO `assignment` (`id_section`, `title`, `description`, `deadline`, `Id_assign`) 
    VALUES ('$id_section', '$title', '$description', '$deadline', NULL);";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    // Close the database connection
    mysqli_close($conn);
}

// Call the function with correct parameters
addAssignment($title, $description, $id_section, $deadline);

?>
