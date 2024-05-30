<?php
$date=$_POST['date'];
$note=$_POST['note'];
$day=$_POST['day'];
$recite=$_POST['recite'];
$require=$_POST['require'];
$assess=$_POST['assess'];
$id_plan=$_POST['section_id'];


function addAchive($id_plan,$date,$note,$day,$recite,$require,$assess){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "INSERT INTO `achievement` (`day`, `hearing`, `grade`, `required`, `note`, `plan_id`, `date`) VALUES ('$day', '$recite', '$assess', '$require', '$note', '$id_plan', '$date');";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
}

addAchive($id_plan,$date,$note,$day,$recite,$require,$assess);

?>