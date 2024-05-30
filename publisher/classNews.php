<?php
        // Assuming you have a function to handle activity deletion
        function dropActivity($id_new) {
            $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
            $query = "DELETE FROM `last_news` WHERE ID_news = $id_new";
            mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        }
        
        // Check if id_Act parameter is set in the request
        if(isset($_POST['id_new'])) {
            // Call the function to delete the activity
            dropActivity($_POST['id_new']);
            // Respond with a success status
            http_response_code(200);
        } else {
            // Respond with an error status
            http_response_code(400);
        }
?>