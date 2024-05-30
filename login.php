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

        $query = "SELECT * FROM `user` WHERE email = '$name' AND password = '$pass' ";
        $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $name && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['user_id'];

                $type=$_SESSION['Type'] = $row['Type'];
                $type=strtolower($type);
                $_SESSION['phone'] = $row['numPhone'];
                if($type=='admin')
                header("Location: admin/admin1.php");
                else if($type=='teacher')
                header("Location: teacher.php");
                else if($type=='student')
                header("Location: student/student.php");
                else
                header("Location: publisher/publisher.php");


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













