<?php
    $name=$_GET['name'];
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre");
    $name= $conn->real_escape_string($name);
    $query = "SELECT * FROM user
    WHERE name LIKE '$name%' OR user_id LIKE '$name%';";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    while($row = $result->fetch_assoc()) {
        echo '<tr>';  
        echo "<td> $row[user_id] </td>";
        echo "<td> $row[name]</td>";
        echo "<td> $row[Type]</td>";                    
        echo "<td><button class='delete' onclick='deleteUser(\"".$row['user_id']."\")' value='delete'>drop</button></td>";
        echo'</tr>';
    }
?> 