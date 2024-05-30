<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, 
				initial-scale=1.0">
	<title> </title>
	<link rel="stylesheet" href="assets/css/style1.css">
	<link rel="stylesheet" href="assets/css/responsive1.css">
	<style>
		.form-container {
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			font-size: 1.2em;
			margin-bottom: 8px;
			color: #333;
		}

		input[type="text"],
		input[type="email"],
		input[type="date"],
		input[type="password"],
		input[type="tel"],
		input[type="number"] {
			padding: 10px;
			font-size: 1em;
			border: 2px solid #ddd;
			border-radius: 4px;
			transition: border-color 0.3s;
		}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="tel"]:focus,
		input[type="number"]:focus {
			border-color: #5b9bd5;
			outline: none;
		}

		input[type="text"]::placeholder {
			color: #aaa;
		}

		input[type="text"]:hover {
			border-color: #ccc;
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

			<div class="dp">
				<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn" alt="dp">
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
				<input type="text" name="" id="" placeholder="Search">
				<div class="searchbtn">
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn" alt="search-button">
				</div>
			</div>
			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">add users</h1>
				</div>

				<div class="report-body">
					<form action="submitstudent.php" method="post">
						<label for="position" style="text-align:center;font-size:30px;">if user is student</label>
						<br>
						<div class="items">
							<div class="item2">
								<label for="fullname">full name</label><br>
								<input type="text" require name="name" id="fname">
							</div>

							<div class="item1">
								<label for="birthday">birthday</label><br>
								<input type="date" require name="bday" id="birthday"><br>
							</div>
						</div>
						<div class="items">
							<div class="item2">
								<label for="password">password</label><br>
								<input type="password" required name="password" id="password"><br>



							</div>
							<div class="item1">
								<label for="number">num phone</label><br>
								<input type="tel" required name="tel" id="num"><br>
							</div>

							<!-- <div class="vertical"></div> -->

						</div>
						<div class="items">

							<div class="item1">
								<label for="email"> email</label><br>
								<input type="email" required name="email" id="email"><br>
							</div>

						</div>

				</div>


				<button value="1" class="subment1" id="login1" name="next" type="submit">
						Next
				</button>

				<button class="subment">
					<a style="text-decoration: none;color:white;" href="add_users.html"> back </a>
				</button>

				</form>

			</div>
		</div>
	</div>
	</div>
	</div>

	<script src="./index.js"></script>
</body>

</html>