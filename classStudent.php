<?php

function getAchievement($id)
{
    // Establish a connection to the database
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    
    // Ensure that the id is properly escaped to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT * FROM `achievement` WHERE plan_id = '$id'";
    $result = mysqli_query($conn, $query) or die("Query failed: " . mysqli_error($conn));
    
    while ($row = mysqli_fetch_assoc($result)) {
        $day = htmlspecialchars($row['day']);
        $hearing = mysqli_real_escape_string($conn, $row['hearing']);
        $grade = htmlspecialchars($row['grade']);
        $required = mysqli_real_escape_string($conn, $row['required']);
        $note = htmlspecialchars($row['note']);
        $date = htmlspecialchars($row['date']);
        
        // Properly escape and quote the required value
        $query1 = "SELECT link FROM `quran` WHERE name = '$required'";
        $query2 = "SELECT link FROM `quran` WHERE name = '$hearing'";
        $result1 = mysqli_query($conn, $query1) or die("Query failed: " . mysqli_error($conn));
        $result2 = mysqli_query($conn, $query2) or die("Query failed: " . mysqli_error($conn));
        
        $row1 = mysqli_fetch_assoc($result1);
        $row2 = mysqli_fetch_assoc($result2);
        
        echo 
        "<tr>
            <td>".$note."</td>
            <td><a href='".htmlspecialchars($row1['link'])."'>".$required."</a></td>
            <td>".$grade."</td>
            <td><a href='".htmlspecialchars($row2['link'])."'><span>".$hearing."</span></a></td>
            <td>".$date."</td>
            <td>".$day."</td>
        </tr>";
    }

    // Close the database connection
    mysqli_close($conn);
}

?>
