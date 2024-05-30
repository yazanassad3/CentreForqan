<?php
$startDate=$_POST['startDate'];
$endDate=$_POST['endDate'];
$id_student=$_POST['id_student'];


function addPlan($startDate,$endDate,$id_student){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "INSERT INTO `plan` (`Plan_ID`, `startDate`, `endDate`, `student_ID`) VALUES (NULL, '$startDate', '$endDate', '$id_student')";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
}

addPlan($startDate,$endDate,$id_student);

?>