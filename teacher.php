<?php
        session_start();
        $id= $_SESSION['id'];
        $name=$_SESSION['name'];
        $Type =$_SESSION['Type'];
        $numPhone= $_SESSION['phone'];
        include "classTeacher.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher||Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
   
    <link rel="shortcut icon" type="image/icon" href="assets/logo/forqan.jpg"/>
    <script>
        function myFunction() {
            confirm("logout from account?!");
            window.location.href='sign_in.php';
        }
        
    </script>
    <style>
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
        }
        body {
            margin: 0PX;
            
        }
        .body{
            margin: 0px;
            width: 100%;
            height:700px;
            display: grid;
            background-color:#D1D9E1;
            grid-template-columns: 10% 10% 10% 10% 10% 10% 10% 10% 10% 10%;
            grid-template-rows: 12% 8% 10% 10% 10% 10% 10% 10% 10% 10%;
        
        }
        .taskBar {
            display: flex;
            grid-area: 1/1/2/11;         
            margin: 0px;
        }
        .logoPage {
            width: 60px;
            margin: 5px;
        }
        .conteniar{
            grid-area: 2/8/11/11;         
            border: solid 4px rgba(20, 108, 130, 1);
            
        }
        .photo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin: auto 10px auto 10px;
            background-color: rgba(20, 108, 130, 1);
        }
        .photo:hover , .info:hover ,th:hover ,td:hover {
            transform: scale(1.05);
            cursor: pointer;
        }
        .info {
            display: flex;
            justify-content:flex-end;
            color:green;
            font-size: 24px;
            font-weight:400;
            margin:auto 10px auto 10px ;    
            
        }
        span{
            color: rgba(20, 108, 130, 1);
        }
        
        .nav_bar_student{
            display: flex;
            justify-content:Center;
            grid-area: 2/1/3/11 ;
            border: solid 4px rgba(20, 108, 130, 1);
            background-color: rgba(20, 108, 130, 1);
        }
        .list_section ,table{
            grid-area: 3/2/12/10 ;
            border: solid 5px rgba(216, 172, 85, 1);
        }
        table{
            
            border: solid 5px green;
        }
        .list_section {
            width: 90%;
            height: auto;
            overflow: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            border-radius: 15px;
            background-color:rgba(20, 108, 130, 1);
        }
        .h_section {
         display: flex;
         margin:auto;
         font-size:34px;
         color: white;
        }
        
        .section  {
            background-color:#D1D9E1;
            border-radius: 15px;
            margin-top: 20px;
            border:solid 3px rgba(216, 172, 85, 1);;
            margin-right: auto;
            margin-left:  auto;
            width: 80%;
            height: 200px;
        }
        th {
            margin-left:auto;
            margin-right:auto;
        }
        
        .header_button_logout {
            height: 70%;
            width: 10%;
            margin:auto 10px auto auto ;
            font-size:34px;
            color:white;
            background-color: rgba(20, 108, 130, 1);
            display: flex;
            justify-content: center; /* Centering Horizantly */
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
        }
       
        .joinClass:hover , .header_button_logout:hover , .header_button_assignment:hover{
            transform: rotate(360deg);
            transform: scale(1.02);
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
        @keyframes sweep {
            0%    {opacity: 0; transform: translateX(-10px)}
            100%  {opacity: 1; transform: translateX(0)}
        }
        .header_button_assignment {
            height: 70%;
            width: 20%;
            margin:auto;
            font-size:34px;
            color:white;
            background-color: rgba(20, 108, 130, 1);
            display: flex;
            justify-content: center; /* Centering Horizantly */
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
        }
        .headTitle {
            margin-top:auto;
            margin-bottom:auto;
            font-size:34px;
            color:#1A5F6F;
        }
        hover:table {
            filter: brightness(90%);
        }
        table{
            text-align:center;
            margin:auto;
        }
        .nameClass{
            font-size:40px;
            margin: 10px 0px 10px 0px;
            text-align: center;
            color: rgba(20, 108, 130, 1);
            
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
        .contTextClass{
            display: flex;
            justify-content: space-around;
            align-items: center ;
        }
        .levelClass {
            font-size: 20px;
            margin: 5%;
            color: rgba(20, 108, 130, 1);
        }
        .joinClass {
            background-color: green;
            color:white;
            width:100px;
            
            padding:5px;
            text-align: center;
            border-radius: 8px;
            font-size:34px;
            color:white;
            background-color: rgba(20, 108, 130, 1);
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
        }
        @media only screen and (max-width: 750px){
            
            .info , .headTitle , .header_button_logout , .header_button_assignment {
                font-size:24px;
            }
            .conteniar {
                grid-area:2/1/10/11;

            }
            .nav_bar_student{
                grid-area:10/1/11/11;
            }
        
            
            .list_section{
                  
                grid-area: 16/2/22/8;
                
            }
        }
        @media only screen and (max-width: 500px){
            
            .info , .headTitle , .header_button_logout , .header_button_assignment {
                font-size:16px;
            }
        }
    </style>
</head>
<body>
    <div class="body">
    
        <div class="taskBar rakkas-regular">
            <img class="logoPage" src="assets/logo/logoForqan.png">
            <div class="headTitle rakkas-regular">مركز الفرقان القراني</div>
            <button class="header_button_logout" onclick="myFunction()">خروج</button>
            <div class="info"><span><?php echo $name." "; ?></span></div>
            <img src="assets/logo/logoForqan.png" alt="" class="photo"> 
        </div>
    
        
        <div class="nav_bar_student" >
            <h2 class="h_section">الحلقات القرانية</h2>
        </div>
        
        <br>
        <div class="list_section rakkas-regular">
            <?php 
             getSection($id,$name);
            ?>       
        </div>
    </div>
    
</body>
</html>