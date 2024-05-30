<?php
    
        // Assuming you have a function to handle activity deletion
        function dropActivity($id_Act) {
            $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
            $query = "DELETE FROM `activity` WHERE ID_activity = $id_Act";
            mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
        }
        
        // Check if id_Act parameter is set in the request
        if(isset($_POST['id_Act'])) {
            // Call the function to delete the activity
            dropActivity($_POST['id_Act']);
            // Respond with a success status
            http_response_code(200);
        } else {
            // Respond with an error status
            http_response_code(400);
        }
?>
        





