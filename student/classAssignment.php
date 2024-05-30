<?php
function getIdSection($id){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT `section_id` FROM `section_student` where  student_id= $id";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    // Cast the section_id to integer and return
    return (int)$row['section_id'];
}
function viewAllAssignmentSection($id){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT * FROM `assignment` where id_section = $id";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    return $result;
}


?>