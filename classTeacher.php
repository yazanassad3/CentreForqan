<?php

    
    function getSection($ID){
        $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
        $query = "SELECT * FROM 'section' WHERE teacher_id = $ID  ";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        while($row = mysqli_fetch_assoc($result)) {
            $title=$row['title'];
            $level=$row['level_section'];
            echo '
            <div class="section">
                <div class="nameClass">'.$title .'</div>
                <div class="contTextClass">
                    <div class="levelClass">'.$level.'</div>
                    <div class="joinClass">join</div>
                </div>
           </div> ';
        }
    }