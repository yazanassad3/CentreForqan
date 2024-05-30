<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$type = $_POST['type'];
		if($type=="admin"||$type=="publisher"){
			$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$bday = $_POST['bday'];
		$tel = $_POST['tel'];
		
		$conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
		$query = "INSERT INTO `user` (`user_id`, `name`, `password`, `Birthday`, `numPhone`, `Type`, `email`) VALUES (NULL, '$name', '$pass', '$bday', '$tel', '$type', '$email');";
		mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
		mysqli_close($conn);

		}	
		else{
		$sec = $_POST['section'];
		$level = $_POST['level'];
		$name = $_POST['name'];
		$conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
		$query1= "SELECT user_id FROM user WHERE name = '$name';";
		$result1=mysqli_query($conn, $query1) or die("Query failed:" . mysqli_error($conn));
		$row1 = mysqli_fetch_assoc($result1);
		$id=$row1['user_id'];
		if($type == "student"){
		
		$query1= "SELECT user_id FROM user WHERE name = '$name';";
		$result1=mysqli_query($conn, $query1) or die("Query failed:" . mysqli_error($conn));
        $row1 = mysqli_fetch_assoc($result1);
		$id=$row1['user_id'];
		$query = "INSERT INTO `section_student` (`section_id`, `student_id`) VALUES ('$sec', '$id');";
		mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
		mysqli_close($conn);
		}else if($type == "teacher"){
			$query = "INSERT INTO `section` (`section_id`, `title`, `level_section`, `teacher_id`) VALUES (NULL, '$sec', '$level', '$id');";
			mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
			mysqli_close($conn);
		}}
	}
		

?>


<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>	</title> 
	<link rel="stylesheet"
		href="assets/css/style1.css"> 
	<link rel="stylesheet"
		href="assets/css/responsive1.css"> 
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet"> 
        <style>
            .body {
              text-align: center;
              padding: 20px ;
            padding-left: 10%;
            
            }
              h1 {
                color: #88B04B;
                font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
                font-weight: 900;
                font-size: 40px;
                margin-bottom: 10px;
              }
              p {
                color: #404F5E;
                font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
                font-size:20px;
                margin: 0;
              }
            i {
              color: #9ABC66;
              font-size: 100px;
              line-height: 200px;
              margin-left:10px;
              
            }
            .card {
              background: white;
              padding: 50px;
              border-radius: 4px;
              box-shadow: 0 2px 3px #C8D0D8;
              display: inline-block;
              margin: 0 auto;
              text-align: center;
            }
          </style>   
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">مركز الفرقان
        
            </div>
			
		</div> 

		<div class="message"> 
			<div class="circle"></div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 
			<div class="dp"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp"> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
				<div class="nav-option option1"> 
						<img src="assets/logo/logo5.png"
							class="nav-img"
							alt="dashboard"> 
							<h3> <a style="text-decoration:none;color:#1A6C82;"  href="admin1.php" > uesr </h3> 
					</div> 
                   
				

					<div class="option2 nav-option"> 
						<img src= 
                        "assets/logo/logo1.png"
							class="nav-img"
							alt="articles">
							<h3> <a style="text-decoration:none;color:#1A6C82;"  href="section.php" > section </h3> 
					</div>

                  
					<div class="nav-option option6">
						<img src= 
						"assets/logo/logo4.png"
							class="nav-img"
							alt="settings"> 
						 <h3><a  style="text-decoration: none;color:#1A6C82;" href="add_users.html"> add users</a> </h3>
					</div> 

					<div class="nav-option logout"> 
						<img src= 
                          "assets/logo/logo3.png"
							class="nav-img"
							alt="logout">

						<h3><a  style="text-decoration: none;color:#1A6C82;" href="../sign_in.php">Logout</a></h3> 
					</div> 

				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 
			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">add users</h1>  
				</div> 

				<div class="report-body"> 
                  
                    <div class="body">
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
      </div>

      

					</div>
                    <button   value="1" class="subment1" id="login1"
                  name="next" type="submit">
				  <a  style="text-decoration: none" href="admin1.php"> finsh </a>

                </button> 
                        
					</div> 
				</div> 
			</div> 
		</div> 
	</div> 
</body> 
</html>