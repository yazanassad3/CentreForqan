<?php
    
    
    function getAchievement(){
        $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
        $query = "SELECT * FROM `achievement`";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        while($row = mysqli_fetch_assoc($result)) {
            $no=$row['no'];
            $day=$row['day'];
            $hearing=$row['hearing'];
            $grade=$row['grade'];
            $required=$row['required'];
            $note=$row['note'];
            $plan_id=$row['plan_id'];
            $date=$row['date'];

            echo  "<tr>
            <td>".$note."</td>
            <td>".$required."</td>
            <td>".$grade."</td>
            <td>".$hearing."</td>
            <td>".$date."</td>
            <td>".$day."</td>
            <td>".$no."</td>
                        
                    </tr>";
        }
            
    }
    
    
?>