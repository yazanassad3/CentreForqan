<?php
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];


function addNews($tit,$des,$imag){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "INSERT INTO `last_news` ( `description`, `image`,  `title`) VALUES ('$des', '$imag', '$tit');";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
}

addNews($title,$description,$image);

?>

