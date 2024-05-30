<?php
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];
$date=$_POST['date'];
$time=$_POST['time'];
$level=$_POST['target'];
$loc=$_POST['location'];


function addActivity($tit,$des,$imag,$dat,$tim,$leve,$lo){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "INSERT INTO `activity` ( `description`, `image`, `date`, `time`, `tilte`, `targeted_student`, `location`) VALUES ('$des', '$imag', '$dat', '$tim', '$tit', '$leve', '$lo');";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
}

addActivity($title,$description,$image,$date,$time,$level,$loc);

?>

