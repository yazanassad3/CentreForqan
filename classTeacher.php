<?php


function getSection($ID, $nameT)
{
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT * FROM `section` WHERE teacher_id = $ID";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $level = $row['level_section'];
        $type = $row['section_id'];
        echo
           '<div class="section">
                <div class="nameClass">'.$title .'</div>
                <div class="contTextClass">
                    <div class="levelClass">'.$level.'</div>
                    <form action="section.php">
                    <input type="hidden" name="section_id" value="'.$type.'" ></input>
                    <input type="hidden" name="nameSection" value="'.$title.'" ></input>
                    <input type="submit" value="إنضم" class="joinClass"></input>                    
                    </form>
                </div>
            </div> ';
    }
}
function getNameUser($ID)
{
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT `name` FROM `user` WHERE user_id = $ID";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}
