<?php
        session_start();
        $id= $_SESSION['id'];
        $name=$_SESSION['name'];
        $Type =$_SESSION['Type'];
        $numPhone= $_SESSION['phone'];
        include "../classTeacher.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>publisher||Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="assets/logo/forqan.jpg"/>
    <script>
        function logout() {
            if(confirm("logout from account?!"))
            window.location.href='../sign_in.php';
        }
        function addActivity() {
            window.location.href='activityPage.php';
        }
        function addNews() {
            window.location.href='newsPage.php';
        }
    </script>
    <style>

        body {
            margin: 0PX;
            background-color:rgba(209, 217, 225, 1);
        }
        .body{
            margin: 0px;
            width: 100%;
            height:700px;
            display: grid;
            grid-template-columns: 10% 10% 10% 10% 10% 10% 10% 10% 10% 10%;
            grid-template-rows: 12% 8% 10% 10% 10% 10% 10% 10% 10% 10%;
        
        }
        .taskBar {
            display: flex;
            grid-area: 1/1/2/11;         
            margin: 0px
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
            grid-area: 4/2/10/7 ;
            
            border: solid 5px green;
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
            background-color:white;
        }
        .h_section {
         display: flex;
         margin:auto;
         font-size:34px;
         color: white;   

        }
        
        .section  {
            background-color: rgba(245, 230, 189, 1);
            border-radius: 15px;
            margin-top: 20px;
            
            border:solid 3px green;
            margin-right: auto;
            margin-left:  auto;
            width: 80%;
            height: 120px;
        }
        th {
            margin-left:auto;
            margin-right:auto;
        }
        .header_button_logout {
            height: 70%;
            width: 10%;
            margin:auto 10px auto auto;
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
            transition: .2s;
            filter: brightness(90%);
            cursor: pointer;

            }
        .addNews:hover , .addActivity:hover {
            transform: rotate(360deg);
            transform: scale(1.05);
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
            font-size:30px;
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
        }
        .levelClass {
            font-size: 20px;
            margin: 5%;
            color: rgba(20, 108, 130, 1);
        }
        .joinClass {
            background-color: green;
            color:white;
            width:50px;
            margin: 5%;
            padding:3px;
            margin-top:50%;
            text-align: center;
            border-radius: 8px;
            margin-left: auto;
        }
        .Adv {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: rgba(20, 108, 130, 1);
            grid-area: 4/3/10/9 ;
            border-radius: 30px;
            border: solid 4px  rgba(20, 108, 130, 1);
        }
        .addActivity {
            background-color: rgba(209, 217, 225, 1);
            width:45%;
            height:90%;
            border-radius: 30px;
            color: rgba(20, 108, 130, 1);
            font-size: 70px;
            padding-left: 10px;
            padding-right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: solid 4px  rgba(216, 172, 85, 1);
        }
        .addNews {
            background-color: rgba(209, 217, 225, 1);
            width:45%;
            height:90%;
            border-radius: 30px;
            
            color: rgba(20, 108, 130, 1);
            font-size: 70px;
            padding-left: 10px;
            padding-right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: solid 4px rgba(216, 172, 85, 1);
        }
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
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
        <div class="taskBar">
            <img class="logoPage" src="../assets/logo/logoForqan.png">
            <div class="headTitle rakkas-regular">مركز الفرقان القراني</div>
            <button class="header_button_logout" onclick="logout()">خروج</button>
            <div class="info"><span><?php echo $name." "; ?></span></div>
            <img src="../assets/logo/logoForqan.png" alt="" class="photo"> 
        </div>    
    <div class="nav_bar_student" >
        <h2 class="h_section">إضافة الإعلانات</h2>
    </div>
    <div class="Adv">
        <button class="addActivity rakkas-regular" onclick="addActivity()">الأنشطة</button>
        <button class="addNews rakkas-regular" onclick="addNews()">اخر الأخبار</button>
    </div>

    </div>
    
</body>
</html>