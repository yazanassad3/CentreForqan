<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$bday = $_POST['bday'];
		$tel = $_POST['tel'];
		$type = 'student';
		
		$conn = mysqli_connect("localhost:3307", "root", "", "forqancentre") or die("Couldn't connect to server");
		$query = "INSERT INTO `user` (`user_id`, `name`, `password`, `Birthday`, `numPhone`, `Type`, `email`) VALUES (NULL, '$name', '$pass', '$bday', '$tel', '$type', '$email');";
		mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
		mysqli_close($conn);
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
						<img src= 
                          "assets/logo/logo5.png"
							class="nav-img"
							alt="dashboard"> 
                            <h3> <a href="admin1.php"  style="text-decoration: none;color:#1A6C82;">uesrs</a> </h3> 
					</div> 


					<div class="option2 nav-option"> 
						<img src= 
                        "assets/logo/logo1.png"
							class="nav-img"
							alt="articles"> 
						
						<h3><a style="text-decoration:none;color:#1A6C82;" href="section.php" >section </h3> 
					</div>

					<div class="nav-option option6"> 
						<img src= 
						"assets/logo/logo4.png"
							class="nav-img"
							alt="settings"> 
						<h3><a style="text-decoration: none;color:#1A6C82;" href="add users.html"> add users</a></h3> 
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
					<h1 class="recent-Articles" >add users</h1>  
				</div> 

				<div class="report-body"> 
					<form style="text-align: center;" method="post" action="Success.php">
                      <h1>student</h1>
                       <div class="subment2" > 
						
						<br>
                        <label style="font-size:30px;">section</label><br>
                        <select name="section" id="level" style="width: 165.33px;">
							<?php 
							$conn = mysqli_connect("localhost:3307", "root", "", "forqancentre");
							$query = "SELECT * FROM section";
							$result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
							while($row = $result->fetch_assoc()) {
								echo '<option value="'.$row["section_id"].'">'.$row["title"].'</option> ';    
							}?>
                        </select>
						<br>
                       <br>
                        <label style="font-size:30px;" >level</label><br>
                            <select name="level" id="level" style="width: 165.33px;">
                           <option value="فتيان القران">فتيان القران</option> 
                           <option value="فرسان القران">فرسان القران</option>
                           <option value="رفاق القران">رفاق القران</option> 
                            </select>
							<br>
                        <input type="hidden" name="type" value='student' ></input>
                        <input type="hidden" name="name" value='<?php echo $name; ?>' ></input>
                        </div>
						 </div>
						<button   value="1" class="subment1"  id="login"
						name="next" type="submit">
						next
	 				   </button> 
                            
						<button   value="1" class=" subment"  id="login"
						name="back" type="submit">
						<a  style="text-decoration: none;color:white;" href="studentpage.php"> back </a>
					  </button>  
                </form> 
             
					</div> 
				</div> 
			</div> 
		</div> 
	</div> 
</body> 
</html>