<?php 
include "../news.php";
//include "classActivity.php";
//include "viewActivityPub.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="../assets/logo/forqan.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="../assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="../assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="../assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/slick-theme.css">
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <!-- bootsnav -->
    <link rel="stylesheet" href="../assets/css/bootsnav.css" >	
    
    <!--style.css-->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!--responsive.css-->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>Activity</title>
    <style>
        /* testimonial-button */
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
        }

        body{
            background-color: rgba(209, 217, 225, 1);
        }

        .testimonial-button {
            margin-top: 18px;
            display: flex;
            justify-content: space-evenly;
        }
        .single-testimonial-box {
            border-radius: 25px;
        }
        .delete {
            width: 80%;
        }
        .testimonial-button button{
            color:white;
            border-radius: 10px;
            font-size: 20px;
            font-weight: 300;
            padding: 4px;
        }/* testimonial-button */
        .testimonial-button .delete{
            background-color: red;
        }/* testimonial-button */
        .testimonial-button .update{
            background-color: #fd980b;
        }/* testimonial-button */
        .dateAct {
				display:flex;
				justify-content: flex-start;
				flex-direction:column;
				margin-right:auto;
				align-items:flex-end;
				color:rgba(20, 108, 130, 1);

			}
			::-webkit-scrollbar {
			width: 10px;
			}

				/* Track */
			::-webkit-scrollbar-track {
				border-radius: 6px;
				background: #f1f1f1;
			}

				/* Handle */
			::-webkit-scrollbar-thumb {
				border-radius: 10px;
				background: rgba(20, 108, 130, 1);
			
			}
			::-webkit-scrollbar-track-piece  {
			
			/* 4 */ }
			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover {
				background: #555;
			}
        
         .bodys{
            margin: 0px;
            width: 100%;
            height:100px;
        
        }
        .taskBar {
            display: flex;
                    
            margin: 0px;
            background-color:rgba(20, 108, 130, 1);
            border: solid 4px rgba(20, 108, 130, 1);
        }
        .logoPage {
            width: 60px;
            margin: 5px;
        }
        .headTitle {
            margin:auto auto auto 10px;
            font-size:34px;
            color:rgba(216, 172, 85, 1);
        }
        .header_button_logout {
            height: 70%;
            width: 10%;
            margin:auto 10px auto auto;
            font-size:34px;
            color:rgba(20, 108, 130, 1);
            background-color:white;
            display: flex;
            justify-content: center; /* Centering Horizantly */
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
        }
        .header_button_logout:hover{
            transform: rotate(360deg);
            transform: scale(1.02);
            transition: .2s;
            filter: brightness(90%);
            cursor: pointer;
        }
        .header_button_logout:active:after {
            animation: sweep .5s ease-in-out;
            padding: 0;
            margin: 0;
            opacity: 1;
            transition:2s;
        }
        {box-sizing: border-box;}

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        bottom: 0px;
        right: 28px;
        }

        /* The popup form - hidden by default */
        .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 30%;
        left: 30%;
        bottom:1%;
        top:1%;
        z-index: 9;
        }
        /* Add styles to the form container */
        .form-container {
        width: 100%;
        padding: 10px;
        background-color: white;
        }
        .testimonial-button{
            margin: top 50px;;
        }
        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
        width: 80%;
        padding: 15px;
        margin-left:10%;
        margin-right:10%;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }
        /* Set a style for the submit/login button */
        .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 80%;
        margin-bottom:10px;
        margin-left:10%;
        margin-right:10%;
        opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .cancel {
            position: fixed;
            right: 62%;
            top:10%;
            border:solid 3px rgba(216, 172, 85, 1);
            color:rgba(216, 172, 85, 1);
            border-radius:50%;
            font-size:20px;
            font-weight:900;
            padding: 10px;
            opacity:0.8 ;
        }

        /* Add some hover effects to buttons */
        .cancel:hover,.btn:hover, .open-button:hover {
        opacity: 1;
        }
        .open-button {
            width: 60%;
            font-size:50px ;
            color:white;
            background-color:rgba(20, 108, 130, 1);
            margin-right:20%;
            margin-left:20%;
            margin-bottom:5%;
            padding:20px;
            border-radius:30px;
        }
        .h2 {
            color: rgba(20, 108, 130, 1);
            font-size: 90px;
            font-weight: 900px;
        }
        form input {
            text-align:end;
        }
    </style>
    <script>
       function openForm() {
        document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
        function logout() {
            if(confirm("logout from account?!"))
            window.location.href='../sign_in.php';
        }
        function back() {
            if (confirm("back to HomePage?!"))
                window.location.href = 'publisher.php';
        }
        function deleteAct(id_Act) {
            // Make an AJAX request to the server
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'classActivity.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Handle successful response
                    location.reload(true);
                    alert('Activity deleted successfully');
                    // Reload activity content after deletion
                   // loadActivity();
                } else {
                    // Handle error
                    alert('Failed to delete activity');
                }
            };
            xhr.send('id_Act=' + encodeURIComponent(id_Act));
        }
        function submitForm() {
            var formData = new FormData(document.getElementById("myforms"));
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById("response").innerHTML = xhr.responseText;
                    } else {
                        alert('There was a problem with the request.');
                    }
                }
            };
            xhr.open("POST", "addActivity.php", true);
            xhr.send(formData);
        }

/*
        function loadActivity() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'viewActivityPub.php');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Update the activity content div with the response
                    document.getElementById('activityContent').innerHTML = xhr.responseText;
                } else {
                    // Handle error
                    alert('Failed to load activity');
                }
            };
            xhr.send();
        }*/
    </script>

</head>

<body>
    <div class="bodys">
        <div class="taskBar">
            <img class="logoPage" src="../assets/logo/logoForqan.png">
            <div class="headTitle rakkas-regular" >مركز الفرقان القراني</div>
            <button onclick="back();" class="header_button_logout" >عودة</button>
            <button class="header_button_logout" onclick="logout()" style="margin-left:10px" >خروج</button>
        </div>
    </div>
	<!--reviews start -->
    
    <section id="reviews" class="reviews">
        <div class="section-header">
            <div class="h2 rakkas-regular">الأنشطة</div>
        </div><!--/.section-header-->
        <div class="reviews-content" id="activityContent">
            <div class="testimonial-carousel">   
                <?php
                    viewActivityPub();
                ?>
            </div>
        </div>
    </section><!--/.reviews-->

    <!-- A button to open the popup form -->
<button class="open-button" onclick="openForm()">اضافة نشاط</button>

<!-- The form -->
        <div class="form-popup" id="myForm">
        <div class="card-body p-5 text-center">
        <div class="card text-white bg-white">
            <div class="mb-md-1 mt-md-1 pb-3" style="background-color:rgba(209, 217, 225, 1); border-radius: 10rem; border:solid 3px rgba(216, 172, 85, 1); padding:50px">

            <div class="section-header">
            <div class="h2" >نشاط</div>
            </div><!--/.section-header-->
            <!--<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
            <p class="text-dark-50 mb-5">Please enter your login and password!</p>--> 

            <form id="myforms">
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typeEmailX">الوصف</label>
                  <input type="text" name="description" require id="typeEmailX" class="form-control form-control-lg" />
                </div>
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typePasswordX">اضافة صورة</label>
                  <input type="text" name="image" id="image" require class="form-control form-control-lg" />
                </div> 
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typePasswordX">تاريخ النشاط</label>
                  <input type="date" name="date" id="date" require class="form-control form-control-lg" />
                </div> 
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typePasswordX">وقت النشاط</label>
                  <input type="time" name="time" id="time" require class="form-control form-control-lg" />
                </div> 
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typePasswordX">عنوان النشاط</label>
                  <input type="text" name="title" id="title" require class="form-control form-control-lg" />
                </div> 
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typePasswordX">الفئة المستهدفة النشاط</label>
                  <input type="text" name="target" id="target" require class="form-control form-control-lg" />
                </div> 
                <div data-mdb-input-init class="form-outline form-dark mb-2">
                  <label class="form-label" for="typePasswordX"> موقع النشاط</label>
                  <input type="text" name="location" id="location" require class="form-control form-control-lg" />
                </div> 
                <button data-mdb-button-init data-m db-ripple-init style="color:white;background-color:green;font: weight 900px; border-radius:5px; border:solid 3px green; " class="btn btn-outline-dark btn-lg px-5" onclick="submitForm()">إضافة</button>  
                </div>
            </form>
                <button class="cancel" onclick="closeForm()">X</button>
            
          </div>
          </div>
        </div>
</div>
<script src="../assets/js/jquery.js"></script>

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="../assets/js/bootsnav.js"></script>

<!--feather.min.js-->
<script src="../assets/js/feather.min.js"></script>

<!-- counter js -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>

<!--slick.min.js-->
<script src="../assets/js/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--Custom JS-->
<script src="../assets/js/custom.js"></script>
</body>
</html>