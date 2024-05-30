<?php
function viewActivityPub(){
        $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
        $query = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        echo '<div class="testimonial-carousel">';   
                
            
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
                                <img src="assets/images/explore/e1.jpg" alt="">
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
                            <p>
                                '.$description.'
                            </p>	
                        </div><!--/.testimonial-comment-->
                        <div class="testimonial-button">
                            <button class="delete" onclick="deleteAct('.$id.')">delete</button>
                            <button class="update" >update</button>    
                        </div>
                    </div><!--/.testimonial-description-->
                </div><!--/.single-testimonial-box-->';
        }
        echo '</div>';
        }
        
        
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="assets/logo/forqan.jpg"/>
       
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css" >	
    
    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Activity</title>
   

</head>

<body>
    <?php 
    viewActivityPub();
     ?>
    <script src="assets/js/jquery.js"></script>
        
    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    
    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script  src="assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="assets/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
         
    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>
</body>-->
</html>
