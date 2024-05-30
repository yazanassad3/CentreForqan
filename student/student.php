<?php
    session_start();
    $id= $_SESSION['id'];
    $name= $_SESSION['name'];
    $Type =$_SESSION['Type'];
    $numPhone= $_SESSION['phone'];
    include "../classStudent.php";  
    include "../classPlan.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student||Dashboard</title>
	<link rel="shortcut icon" type="image/icon" href="../assets/logo/forqan.jpg"/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
        <script>
            function myFunction() {
                if(confirm("logout from account?!"))
                window.location.href='../sign_in.php';
            }
            function goToAssign() {
                if(confirm("أذهب الى صفحة المهام ؟"))
                window.location.href='assignment.php';
            }
        </script>
    
    <style>
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
        }
        body{
            margin:0px;
            padding: 0px;
            background-color:#D1D9E1;
        }
        .body{
            margin: 0px;
            width: 100%;
            height:720px;
            display: grid;
            
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
            grid-area: 2/8/11/12;         
            border: solid 4px rgba(20, 108, 130, 1);
            
        }
        .photo {
            display: block;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin:auto 10px;
            background-color: rgba(20, 108, 130, 1);
        }
        .photo:hover , .info:hover ,th:hover ,td:hover {
            transform: scale(1.05);
            cursor: pointer;
        }
        .info {
            color:green;
            font-size: 24px;
            font-weight:400;
            margin:auto 10px ;   
            
        }
        .buttonView {
            margin-left: 40%;
            margin-right: 40%;
            width: 20%;
            border-radius: 8px;
            color: white;
            font-weight: 700;
            background-color: rgba(20, 108, 130, 1);
            padding: 10px;
        }
        span{
            color: rgba(20, 108, 130, 1);
        }
        .date {
            text-align: end;
            margin: 30px;
            font-size: 24px;

        }
        .nav_bar_student{
            display: flex;
            justify-content:Center;
            grid-area: 2/1/3/11;
            border-top: solid 4px rgba(216, 172, 85, 1);
            border-bottom: solid 4px rgba(216, 172, 85, 1);
        
            background-color: rgba(20, 108, 130, 1);
        }
        .plans ,table{
            grid-area: 3/1/12/11 ;
            overflow: auto;
            height:100%;
            background-color:#D1D9E1;
        }
        table{
            
            border: solid 5px green;
        }
        .allPlan {
            width: 90%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
        
        }
        .allPlan {
            display: flex;
            width: 60%;
            flex-direction: row;
            justify-content: flex-start;
            margin-top: 0%;
            background-color:rgba(20, 108, 130, 1);
            flex-wrap: wrap;
            gap:5%;
            border-right: solid 4px rgba(216, 172, 85, 1);
            border-left: solid 4px rgba(216, 172, 85, 1);

        }

        .plan {
            background-color:white;
            border-radius: 30px;
            border: solid 4px rgba(216, 172, 85, 1);
            width: 40%;
            height: 13em;
            margin:auto;
            margin-bottom: 3%;
            margin-top: 3%;
            
        }
        .h_plan {
         display: flex;
         margin:auto;
         font-size:34px;
         color: white;   

        }
        
        .news  {
            display: inline;
            width: 20%;
            height: 100px;
        }
        th {
            margin-left:auto;
            margin-right:auto;
        }
        .header_button_logout {
            height: 70%;
            width: 10%;
            margin:auto 10px;
            font-size:34px;
            color:white;
            background-color: rgba(20, 108, 130, 1);
            display: flex;
            justify-content: center; /* Centering Horizantly */
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
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
        .buttonView:hover ,.header_button_logout:hover , .header_button_assignment:hover{
            transform: rotate(360deg);
            transform: scale(1.02);
            filter: brightness(90%);
            cursor: pointer;

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
            margin:auto 10px;
            margin-right:auto;
            font-size:34px;
            color:rgba(20, 108, 130, 1);
        }
        hover:table {
            filter: brightness(90%);
        }
        table{
            text-align:center;
            margin:auto;
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
            .plans{
                diplay:none;
            }
            
            .plans{
                border:none;
                margin-top:100px;  
                grid-row-start: 14;
                width:100%;
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
            <img class="logoPage" src="../assets/logo/logoForqan.png">
            <div class="headTitle rakkas-regular">مركز الفرقان القراني</div>
            <button class="header_button_logout" onclick="goToAssign()">الواجبات</button>
            <button class="header_button_logout" onclick="myFunction()">خروج</button>
            <div class="info"><span><?php echo $name." "; ?></span></div>
            <img src="../assets/logo/logoForqan.png" alt="" class="photo"> 
        </div>
       
        <div class="nav_bar_student " >
            <h2 class="h_plan">خطتي</h2>
        </div>
        
        <br>
        <div class="plans rakkas-regular">
            <div class="allPlan">
                <?php 
                    getPlan($id);
                ?>
            </div>
        <!--<table border="5" style="width: 100%; height: 100%;">
            <tr>
                <th>ملاحظات</th>
                <th>المطلوب</th>
                <th>تقييم</th>
                <th>التسميع</th>
                <th>التاريخ</th>
                <th>اليوم</th>
                <th>الرقم</th>

            </tr>
           // <?php
           // getAchievement();
           // ?>
        </table>-->
        </div>
    </div>
    
</body>
</html>