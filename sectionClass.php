<?php   

function getStudentClass($id_section,$nameT){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT * FROM `section_student` WHERE section_id = $id_section ";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
        $id_stu=$id=$row['student_id'];
        $query1 = "SELECT * FROM `user` WHERE user_id = $id";
        $result1 = mysqli_query($conn, $query1) or die("Query failed:" . mysqli_error($conn));
        $row1 = mysqli_fetch_assoc($result1);
        $name=$row1['name'];
        echo '<div class="studentSecction">
            <form action="planTeacher.php">
            <input type="hidden" name="id_student" value="'.$id_stu.'" ></input>
            <input type="hidden" name="nameT" value="'.$name.'" ></input>
            <input type="submit" value="إنضم" class="buttonPlan"></input>
            </form>
            <div class="nameStudent rakkas-regular">'.$name.'</div>
        </div>';
    }






}















?>