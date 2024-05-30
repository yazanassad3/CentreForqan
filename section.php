<?php
    session_start();
    $id= $_SESSION['id'];
    $name=$_SESSION['name'];
    $Type =$_SESSION['Type'];
    $numPhone= $_SESSION['phone'];
    $_SESSION['section']= $_GET['nameSection']; 
    $id_sec=$_GET['section_id'];
    include "sectionClass.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
    <script>
        function logout() {
                if(confirm("logout from account?!"))
                window.location.href='sign_in.php';
            }
        function back() {
            if(confirm("back to teacher page?!"))
            window.location.href='teacher.php';
        }
        function goToAssign($idd) {
            if(confirm("أذهب الى صفحة المهام ؟"))
            window.location.href='student/assignment.php?section='+$idd;
        } 
    </script>
    <style>

        body {
            margin: 0PX;
            background-color: #D1D9E1;            
        }
        .body{
            margin: 0px;
            width: 100%;
            height:130px;
            display: grid;

            grid-template-columns: 10% 10% 10% 10% 10% 10% 10% 10% 10% 10%;
            grid-template-rows: 50% 45%;
        
        }
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
        }
        .taskBar {
            display: flex;
            grid-area: 1/1/1/11;         
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
        
        .SectionBar {
            display: flex;
            grid-area: 2/1/2/11;         
            margin: 0px;
            background-color: rgba(20, 108, 130, 1);
            border: solid 1px rgba(20, 108, 130, 1);
        }
        
        .buttonPlan {
            height: 100%;
            width: 100%;
            font-size:34px;
            padding-left: 30px;
            padding-right: 30px;
            color:white;
            background-color: rgba(20, 108, 130, 1);
            display: flex;
            justify-content: center; /* Centering Horizantly */
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
        }
        
        
   
      
     
        .buttonAssignment , .header_button_logout , .header_button_back  {
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
        .buttonAssignment:hover,.buttonPlan:hover , .header_button_logout:hover ,  .header_button_back:hover {
            transform: rotate(360deg);
            transform: scale(1.02);
            filter: brightness(90%);
            cursor: pointer;

        }
        
        .studentSecction {
            padding: 15px;
            margin-top: 30px;
            display: flex;
            border-radius: 25px;
            justify-content:safe center;         
            margin-left: 25%;
            margin-right: 25%;
            background-color:white;
            border: solid 3px rgba(20, 108, 130, 1);
        }
        .studentSecction:hover {
            transform: scale(1.05);
        }
        .headTitle {
            margin:    auto auto auto 10px;
            font-size:34px;
            color:rgba(20, 108, 130, 1);
        }
         .nameTeacher {
            margin:auto;
            font-size:34px;
            color:green;

        }
        .nameStudent {
            margin:auto 30px auto auto; 
            font-size:30px;
            color:green;  
        }
        .nameTeacher span {
            color :rgba(20, 108, 130, 1);
        }
        .titleSection {
            margin:auto;
            color:white;
            font-size:34px;
            text-align: center;
        }
        .names {
            background-color: rgba(245, 230, 189, 1);
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
            
            .headTitle , .header_button_logout , .header_button_back {
                font-size:24px;
            }
            .conteniar {
                grid-area:2/1/10/11;

            }
            
    
        }
        @media only screen and (max-width: 500px){
            
             .headTitle , .header_button_logout, .header_button_back  {
                font-size:16px;
            }
        }
    </style>
</head>
<body>
    <div class="body">
        <div class="taskBar">
            <img class="logoPage" src="assets/logo/logoForqan.png">
            <div class="headTitle rakkas-regular">مركز الفرقان القراني</div>
            <button onclick="goToAssign(<?php echo $id_sec; ?>)" class="buttonAssignment">الواجبات</button>
            <button onclick="back();" class="header_button_back">عودة</button>
        </div>
        <div class="SectionBar">
        <div class="titleSection rakkas-regular">شعبة : <?php echo $_GET['nameSection']; ?></div>
        </div> 
    </div>
    
    <?php
    getStudentClass($id_sec,$name);
    ?>
  
   
</body>
</html> 