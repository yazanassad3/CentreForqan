    <?php
        session_start();
        $id= $_SESSION['id'];
        $name= explode("@",$_SESSION['name']);
        $Type =$_SESSION['Type'];
        $numPhone= $_SESSION['phone'];
        include "classStudent.php";  
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin||Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  
    <style>
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
            margin: 0px;
            border: solid 4px rgba(20, 108, 130, 1);
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
            display: block;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-top: 70px;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(20, 108, 130, 1);
        }
        .photo:hover , .info:hover ,th:hover ,td:hover {
            transform: scale(1.05);
            cursor: pointer;
        }
        .info {
            margin-top: 40px;
            display: flex;
            justify-content:flex-end;
            color:green;
            font-size: 24px;
            font-weight:400;
            margin-right:20% ;   
            
        }
        span{
            color: rgba(20, 108, 130, 1);
        }
        
        .nav_bar_student{
            display: flex;
            justify-content:Center;
            grid-area: 2/1/3/8 ;
            border: solid 4px rgba(20, 108, 130, 1);
            background-color: rgba(20, 108, 130, 1);
        }
        .plan ,table{
            grid-area: 4/2/10/7 ;
            
            border: solid 5px green;
        }
        table{
            
            border: solid 5px green;
        }
        .plan {
            width: 90%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            border-radius: 15px;
            background-color:white;
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
        .header_button_logout:hover , .header_button_assignment:hover{
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
            margin:auto;
            font-size:34px;
            color:green;
        }
        hover:table {
            filter: brightness(90%);
        }
        table{
            text-align:center;
            margin:auto;
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
            .plan{
                diplay:none;
            }
            
            .plan{
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
        <div class="taskBar">
            <img class="logoPage" src="assets/logo/logoForqan.png">
            <div class="headTitle">مركز الفرقان القراني</div>
            <div class="header_button_assignment">صفحة المهام</div>
            <div class="header_button_logout">خروج</div>
        </div>
        <div class="conteniar">
                <img src="assets/logo/logoForqan.png" alt="" class="photo">  
                <div class="info_con">
                    <div class="info"><span><?php echo $name[0]." "; ?></span> : الاسم </div>
                    <div class="info"><span><?php echo $numPhone." "; ?></span>: رقم الهاتف</div>
                    <div class="info"><span><?php echo $Type ?></span></div>
                    <div class="info"><span><?php echo $id." "; ?></span>: برقم التسلسلي </div>
                    <div class="info"><span><?php echo $id." "; ?></span>: غياب الطالب</div>
                </div>
               
        </div>
        
        <div class="nav_bar_student" >
            <h2 class="h_plan">خطتي</h2>
        </div>
        
        <br>
        <div class="plan">
        <table border="5" style="width: 100%; height: 100%;">
            <tr>
                <th>ملاحظات</th>
                <th>المطلوب</th>
                <th>تقييم</th>
                <th>التسميع</th>
                <th>التاريخ</th>
                <th>اليوم</th>
                <th>الرقم</th>

            </tr>
            <?php
            getAchievement();
            ?>
        </table>
        </div>
    </div>
    
</body>
</html>