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
                    <p>
                        '.$description.'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ratione architecto excepturi enim ab vel. Amet nostrum voluptatibus sapiente incidunt. Odio rerum voluptatum odit laborum eum placeat eaque autem error.
                    </p>	
                </div><!--/.testimonial-comment-->
            </div><!--/.testimonial-description-->
        </div><!--/.single-testimonial-box-->';
}
}
?>
