<?php
    session_start();
    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");

    if (isset($_POST['email']) && isset($_POST['password'])) {

        function validate($data){
    
           $data = trim($data);
    
           $data = stripslashes($data);
    
           $data = htmlspecialchars($data);
    
           return $data;
    
        }
    }

    $name=validate($_POST['email']);
    $pass=validate($_POST['password']);
    if (empty($name)) {

        header("Location: sign_in.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: sign_in.php?error=Password is required");

        exit();

    }else{

        $query = "SELECT * FROM `user` WHERE name = '$name' AND password = '$pass' ";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['name'] === $name && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['user_id'];

                $_SESSION['Type'] = $row['Type'];
                $_SESSION['phone'] = $row['numPhone'];
            
                header("Location: studentPlan.php");

                exit();

            }else{

                header("Location: sign_in.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: sign_in.php?error=Incorect User name or password");

            exit();

        }

    }
    //$query = "SELECT * FROM `user` WHERE name = '$name' AND password = '$pass' ";
    //$result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));













