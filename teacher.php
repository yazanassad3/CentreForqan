<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher||Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  
    <style>

        body {
            margin: 0PX;
            
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
        .nameClass{
            font-size:30px;
            text-align: center;
            color: rgba(20, 108, 130, 1);
            
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
            width: 20%;
            margin: 5%;
            text-align: center;
            border-radius: 8px;
            color: white;
            margin-left: auto;
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
            <img class="logoPage" src="assets/logo/logoForqan.png">
            <div class="headTitle">مركز الفرقان القراني</div>
            <div class="header_button_logout">خروج</div>
        </div>
        <div class="conteniar">
                <img src="assets/logo/logoForqan.png" alt="" class="photo">  
                <div class="info_con">
                    <div class="info"><span><?php echo $name[0]." "; ?></span> : الاسم </div>
                    <div class="info"><span><?php echo $numPhone." "; ?></span>: رقم الهاتف</div>
                    <div class="info"><span><?php echo $Type ?></span></div>
                    <div class="info"><span><?php echo $id." "; ?></span>: الرقم التسلسلي </div>
                </div>
               
        </div>
        
        <div class="nav_bar_student" >
            <h2 class="h_section">الحلقات القرانية</h2>
        </div>
        
        <br>
        <div class="list_section">
           <div class="section">
                <div class="nameClass">title</div>
                <div class="contTextClass">
                    <div class="levelClass">level class</div>
                    <div class="joinClass">join</div>
                </div>
                
           </div> 
           <div class="section">
            <div class="nameClass">title</div>
            <div class="contTextClass">
                <div class="levelClass">level class</div>
                <div class="joinClass">join</div>
            </div>
            
            </div>
            <div class="section">
                <div class="nameClass">title</div>
                <div class="contTextClass">
                    <div class="levelClass">level class</div>
                    <div class="joinClass">join</div>
                </div>
                
           </div>
        </div>
    </div>
    
</body>
</html>