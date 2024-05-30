<?php
    
    
    function getPlan($id){
        $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
        $query = "SELECT * FROM `plan` WHERE student_ID = $id";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        while($row = mysqli_fetch_assoc($result)) {
            $endDate=$row['endDate'];
            $startDate=$row['startDate'];
            $id_plan=$row['Plan_ID'];
            echo '<div class="plan">
                    <form action="planTeacherStudent.php">
                    <input type="hidden" name="section_id" value="'.$id_plan.'" ></input>        
                    <input type="hidden" name="student_id" value="'.$id.'" ></input>        
                    <div class="date">تاريخ البدء : <span>'.$startDate.'</span></div>
                    <div class="date">تاريخ الانتهاء : <span>'.$endDate.'</span></div>
                    <button class="buttonView" type="submit">رؤية اكثر</button>
                    </form>
                </div>';
        }
    }