<?php
function viewNews(){
$conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
$query = "SELECT * FROM `last_news`";
$result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));

while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $description = $row['description'];
    $image = $row['image'];
    
    echo '<div class="single-testimonial-box">
            <div class="testimonial-description">
                <div class="testimonial-title">'.$title.'</div>
                    <div class="testimonial-info">
                <div class="testimonial-person">
                    <img src="'.$image.'" alt="">
                </div><!--/.testimonial-person-->
            </div><!--/.testimonial-info-->
            <div class="testimonial-comment">
                    <p style="text-align: end;">
                        '.$description.'
                    </p>	
                </div><!--/.testimonial-comment-->
            </div><!--/.testimonial-description-->
        </div><!--/.single-testimonial-box-->';
}
}

function viewNewsPub(){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT * FROM `last_news`";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $description = $row['description'];
        $image = $row['image'];
        $id = $row['ID_news'];
        echo '<div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-title">'.$title.'</div>
                        <div class="testimonial-info">
                    <div class="testimonial-person">
                        <img src="'.$image.'" alt="">
                    </div><!--/.testimonial-person-->
                </div><!--/.testimonial-info-->
                <div class="testimonial-comment">
                        <p style="text-align: end;">
                            '.$description.'
                        </p>	
                    </div><!--/.testimonial-comment-->
                    <div class="testimonial-button">
                            <button class="delete" onclick="deleteNews('.$id.')">delete</button>
                    </div>
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->';
    }
    }


function viewActivity(){
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
    $query = "SELECT * FROM `activity`";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['tilte'];
        $description = $row['description'];
        $image = $row['image'];
        $date=$row['date'];
        $time=$row['time'];
        $level=$row['targeted_student'];
        echo '<div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-title">'.$title.'</div>
                    <div class="testimonial-info">
                        <div class="testimonial-person">
                            <img src="'.$image.'" alt="">
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                    <br>
                    <div class="dateAct">
                        <div class="act">التاريخ : <span>'.$date.'</span><i class="fas fa-calendar-alt" style="font-size:30px;color:red"></i>
                        </div>
                        <div class="act">الوقت : <span>'.$time.'</span></div>
                    </div>
                    <br>
                    <div class="dateAct">
                        <div class="act">الموقع : <span>'.$level.'</span></div>
                        <div class="act">الفئة : <span>'.$level.'</span></div>
                    </div>
                    <div class="testimonial-comment">
                        <p style="text-align: end;">
                            '.$description.'
                        </p>	
                    </div><!--/.testimonial-comment-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->';
    }
    }
    function viewActivityPub(){
        $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
        $query = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['tilte'];
            $description = $row['description'];
            $image = $row['image'];
            $date=$row['date'];
            $time=$row['time'];
            $level=$row['targeted_student'];
            $id=$row['ID_activity'];
            echo '<div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-title">'.$title.'</div>
                        <div class="testimonial-info">
                            <div class="testimonial-person">
                                <img src="'.$image.'" alt="">
                            </div><!--/.testimonial-person-->
                        </div><!--/.testimonial-info-->
                        <br>
                        <div class="dateAct">
                            <div class="act">التاريخ : <span>'.$date.'</span><i class="fas fa-calendar-alt" style="font-size:30px;color:red"></i>
                            </div>
                            <div class="act">الوقت : <span>'.$time.'</span></div>
                        </div>
                        <br>
                        <div class="dateAct">
                            <div class="act">الموقع : <span>'.$level.'</span></div>
                            <div class="act">الفئة : <span>'.$level.'</span></div>
                        </div>
                        <div class="testimonial-comment">
                            <p style="text-align: end;">
                                '.$description.'
                            </p>	
                        </div><!--/.testimonial-comment-->
                        <div class="testimonial-button">
                            <button class="delete" onclick="deleteAct('.$id.')">delete</button>
                        </div>
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->';
        }
        }
    


?>
