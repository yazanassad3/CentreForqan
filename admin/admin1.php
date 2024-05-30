<?php
 session_start();
 ?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <script>
        function deleteUser(id_user) {
            // Make an AJAX request to the server
            var xhr = new XMLHttpRequest();
            xhr.open('POST','deleteUser.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Handle successful response
                    location.reload(true);
                    alert('A new deleted successfully');
                    // Reload activity content after deletion
                    // loadActivity();
                } else {
                    // Handle error
                    alert('Failed to delete a new');
                }
            };
            xhr.send('id_user=' + encodeURIComponent(id_user));
            
        }

        var http = new XMLHttpRequest();
        function validate(user) {
            http.open("GET", "validate.php?name=" + user, true);
            http.onreadystatechange=function() {
                if(http.readyState == 4 && http.status==200 ) {
                document.getElementById('fl-table').innerHTML = http.responseText;
                }
            }
            http.send(null);
        }
        validate("");
        </script>
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

		<style>

		.fl-table {
  border-radius: 5px;
  font-size: 12px;
  font-weight: normal;
  border: none;
  border-collapse: collapse;
  width: 100%;
  max-width: 100%;
  white-space: nowrap;
  background-color: white;
}

.fl-table td, .fl-table th {
  text-align: center;
  padding: 8px;
}

.fl-table td {
  border-right: 1px solid #f8f8f8;
  font-size: 12px;
}

.fl-table thead th {
  color: #ffffff;
  background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
  color: #ffffff;
  background: #324960;
}

.fl-table tr:nth-child(even) {
  background: #F8F8F8;
}

.delete {
    padding:7px ;
    border:solid 4px red; 
    margin: auto;
    color: black;
    font-weight:800;
    background-color: red;

}
/* Responsive */

@media (max-width: 767px) {
  .fl-table {
      display: block;
      width: 100%;
  }
  .table-wrapper:before{
      content: "Scroll horizontally >";
      display: block;
      text-align: right;
      font-size: 11px;
      color: white;
      padding: 0 0 10px;
  }
  .fl-table thead, .fl-table tbody, .fl-table thead th {
      display: block;
  }
  .fl-table thead th:last-child{
      border-bottom: none;
  }
  .fl-table thead {
      float: left;
  }
  .fl-table tbody {
      width: auto;
      position: relative;
      overflow-x: auto;
  }
  .fl-table td, .fl-table th {
      padding: 20px .625em .625em .625em;
      height: 60px;
      vertical-align: middle;
      box-sizing: border-box;
      overflow-x: hidden;
      overflow-y: auto;
      width: 120px;
      font-size: 13px;
      text-overflow: ellipsis;
  }
  .fl-table thead th {
      text-align: left;
      border-bottom: 1px solid #f7f7f9;
  }
  .fl-table tbody tr {
      display: table-cell;
  }
  .fl-table tbody tr:nth-child(odd) {
      background: none;
  }
  .fl-table tr:nth-child(even) {
      background: transparent;
  }
  .fl-table tr td:nth-child(odd) {
      background: #F8F8F8;
      border-right: 1px solid #E6E4E4;
  }
  .fl-table tr td:nth-child(even) {
      border-right: 1px solid #E6E4E4;
  }
  .fl-table tbody td {
      display: block;
      text-align: center;
  }
}
    .logo {
        width:50px ;
    }
		</style> 

	</head> 


<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
    			<img src="assets/logo/forqan.jpg" class="logo"></img>
		</div> 

		
		<div class="message"> 
			<div class="circle"></div> 
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
        <?php //if(isset($_GET['state'])) ?>
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

					
					<h1 class="recent-Articles">users</h1> 
					<div class="searchbar"> 
						<input type="text"
                        onkeyup="validate(this.value)" 

							placeholder="Search"> 
						<div class="searchbtn"> 
						<img src= 
			"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
								class="icn srchicn"
								alt="search-icon"> 
						</div> 
					</div> 
				</div> 
				<div class="table-wrapper">
				<table class="fl-table" id="fl-table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>drop</th>
                    </tr>
               
                    </table>
					
                  </div>
			</div> 
		</div> 
        <?php //; ?>

	</div> 
   

</body> 
</html>
