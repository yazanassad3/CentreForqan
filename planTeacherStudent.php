<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$Type = $_SESSION['Type'];
$numPhone = $_SESSION['phone'];
$section = $_SESSION['section'];
$id_student = $_GET['student_id'];
include 'classTeacher.php';
include 'classStudent.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
   
    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <script>
        function logout() {
                if(confirm("logout from account?!"))
                window.location.href='sign_in.php';
            }
        function back() {
            if(confirm("back to teacher page?!"))
            window.location.href='teacher.php';
        } 
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        function submitForm() {
            var formData = new FormData(document.getElementById("myforms"));
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById("response").innerHTML = xhr.responseText;
                    } else {
                        alert('There was a problem with the request.');
                    }
                }
            };
            xhr.open("POST", "addAchive.php", true);
            xhr.send(formData);
            window.location.reload();
        }   
    </script>
    
    
    <style>
        body {
            margin: 0PX;
            background-color:#D1D9E1;

        }

        .body {
            margin: 0px;
            width: 100%;
            height: 130px;
            display: grid;
            grid-template-columns: 10% 10% 10% 10% 10% 10% 10% 10% 10% 10%;
            grid-template-rows: 60% 40%;
        }

        .taskBar {
            display: flex;
            grid-area: 1/1/2/11;
            margin: 0px;
        }
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
        }
        .logoPage {
            width: 60px;
            margin: 5px;
        }

        .SectionBar {
            background-color:rgba(20, 108, 130, 1);
            display: flex;
            grid-area: 2/1/2/11;
            margin: 0px;

        }







        .buttonPlan,
        .buttonAssignment,
        .header_button_logout,
        .header_button_back {
            height: 70%;
            width: 10%;
            margin: auto 10px;
            font-size: 34px;
            color: white;
            background-color: rgba(20, 108, 130, 1);
            display: flex;
            justify-content: center;
            /* Centering Horizantly */
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 var(--primary-dark), 0 5px 15px -4px #000;
        }


        .addAchive:hover,
        .buttonView:hover,
        .buttonPlan:hover,
        .header_button_logout:hover,
        .header_button_back:hover {
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
            justify-content: space-between;
            margin-left: 20%;
            margin-right: 20%;
            border: solid 3px rgba(20, 108, 130, 1);
        }

        .studentSecction:hover {
            transform: scale(1.05);
        }

        .headTitle {
            margin: auto 10px;
            margin-right:auto;
            font-size: 34px;
            color: rgba(20, 108, 130, 1);
        }

        .nameTeacher {
            margin: auto;
            font-size: 34px;
            color: white;

        }

        .nameStudent {
            margin: auto;
            font-size: 30px;
            color: green;
        }

       

        .titleSection {
            margin: auto;
            color: green;
            font-size: 34px;
            text-align: center;
            grid-area: 2/1/2/11;
        }

        .names {
            background-color: rgba(245, 230, 189, 1);
        }

        .date {
            text-align: end;
            margin: 30px;
            font-size: 24px;

        }
        .plan{
            width: 70%;

            margin: 20px auto;

        }
        th,td{
            padding-top: 15px;
            padding-bottom:15px ;
            text-align:center;
        }
        {
         box-sizing: border-box;
        }

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
            bottom: 5%;
            right: 30%;
            left: 30%;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            width: 100%;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 80%;
            padding: 15px;
            margin-left: 10%;
            margin-right: 10%;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
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
            margin-bottom: 10px;
            margin-left: 10%;
            margin-right: 10%;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .cancel {
            position: fixed;
            right: 62%;
            top: 12%;
            border: solid 3px rgba(216, 172, 85, 1);
            color: rgba(216, 172, 85, 1);
            border-radius: 50%;
            font-size: 20px;
            font-weight: 900;
            padding: 10px;
            opacity: 0.8;
        }

        /* Add some hover effects to buttons */
        .cancel:hover,
        .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

        .open-button {
            width: 80%;
            font-size: 50px;
            color: white;
            background-color: rgba(20, 108, 130, 1);
            margin-right: 10%;
            margin-left: 10%;
            margin-bottom: 5%;
            padding: 20px;
            border-radius: 30px;
        }

        @media only screen and (max-width: 750px) {

            .buttonPlan,
            .titleSection,
            .nameTeacher,
            .headTitle,
            .header_button_logout,
            .header_button_back {
                font-size: 24px;
            }

            .conteniar {
                grid-area: 2/1/10/11;

            }


        }        
    </style>
</head>
<body>
    <div class="body">
        <div class="taskBar rakkas-regular">
            <img class="logoPage" src="assets/logo/logoForqan.png">
            <div class="headTitle">مركز الفرقان القراني</div>
            <div onclick="back()" class="header_button_back">عودة</div>
            <div onclick="logout()" class="header_button_back">الخروج</div>
        </div>
        <div class="SectionBar rakkas-regular">
            <div class="nameTeacher"><span>اسم الطالب :</span><?php echo getNameUser($id_student);?> </div>
        </div>
    </div>
    <div class="plan rakkas-regular">
        <table border="5" style="width: 100%; height: 100%;background-color:white;border:solid 5px rgba(20, 108, 130, 1);">
            <tr>
                <th>ملاحظات</th>
                <th>المطلوب</th>
                <th>تقييم</th>
                <th>التسميع</th>
                <th>التاريخ</th>
                <th>اليوم</th>
            </tr>
            <?php
            getAchievement($_GET['section_id']);
?>
        </table>
    </div>
    <!-- A button to open the popup form -->
    <button class="open-button" onclick="openForm()">اضافة تسميع</button>

    <!-- The form -->
    <div class="form-popup" id="myForm">
        <div class="card-body p-5 text-center">
            <div class="card text-white bg-white">
                <div class="mb-md-1 mt-md-1 pb-3"
                    style="background-color:white; border-radius: 10rem; border:solid 3px rgba(216, 172, 85, 1); padding:50px">

                    <div class="section-header">
                        <div class="h2">إضافة خطة جديدة</div>
                    </div>
                    <form id="myforms">
    <div data-mdb-input-init class="form-outline form-dark mb-2">
        <label class="form-label" for="typeEmailX">تاريخ</label>
        <input type="date" name="date" required id="typeEmailX" class="form-control form-control-lg" />
    </div>
    <div data-mdb-input-init class="form-outline form-dark mb-2">
        <label for="days"> اليوم:</label>
        <select id="days" name="day" class="form-control form-control-lg">
            <option value="الأحد">الأحد</option>
            <option value="الاثنين">الاثنين</option>
            <option value="الثلاثاء">الثلاثاء</option>
            <option value="الأربعاء">الأربعاء</option>
            <option value="الخميس">الخميس</option>
            <option value="الجمعة">الجمعة</option>
            <option value="السبت">السبت</option>
        </select>
    </div>
    <div data-mdb-input-init class="form-outline form-dark mb-2">
        <label for="selectFromThree" >التسميع</label>
        <select id="selectFromThree" name="recite" class="form-control form-control-lg">
            <option value="الكوثر">الكوثر</option>
            <option value="العصر">العصر</option>
            <option value="الماعون">الماعون</option>
            <option value="الفلق">الفلق</option>
            <option value="الناس">الناس</option>
            <option value="الضحى">الضحى</option>
            <option value="التين">التين</option>
            <option value="العاديات">العاديات</option>
            <option value="القارعة">القارعة</option>
            <option value="التكاثر">التكاثر</option>
            <option value="الزلزلة">الزلزلة</option>
            <option value="البينة">البينة</option>
            <option value="القدر">القدر</option>
            <option value="الشرح">الشرح</option>
            <option value="التين">التين</option>
        </select>
    </div>  
    <div data-mdb-input-init class="form-outline form-dark mb-2">
        <label for="selectFromThree" >تقييم</label>
        <select id="selectFromThree" name="assess" class="form-control form-control-lg">
            <option value="ممتاز">ممتاز</option>
            <option value="جيد جدا">جيد جدا</option>
            <option value="جيد">جيد</option>
        </select>
    </div>  
    <div data-mdb-input-init class="form-outline form-dark mb-2">
        <label for="selectFromThree" >المطلوب</label>
        <select id="selectFromThree" name="require" class="form-control form-control-lg">
        <option value="الكوثر">الكوثر</option>
        <option value="العصر">العصر</option>
        <option value="الماعون">الماعون</option>
        <option value="الفلق">الفلق</option>
        <option value="الناس">الناس</option>
        <option value="الضحى">الضحى</option>
        <option value="التين">التين</option>
        <option value="العاديات">العاديات</option>
        <option value="القارعة">القارعة</option>
        <option value="التكاثر">التكاثر</option>
        <option value="الزلزلة">الزلزلة</option>
        <option value="البينة">البينة</option>
        <option value="القدر">القدر</option>
        <option value="الشرح">الشرح</option>
        <option value="التين">التين</option>
        </select>
    </div>
    <div data-mdb-input-init class="form-outline form-dark mb-2">
        <label class="form-label" for="note">ملاحظات</label>
        <textarea name="note" id="note" class="form-control form-control-lg"></textarea>
    </div>
    <input type="hidden" name="section_id" value='<?php echo $_GET['section_id']; ?>' ></input>
    <input type="hidden" name="student_id" value='<?php echo $_GET['student_id']; ?>' ></input>
    <br>
    <button data-mdb-button-init data-mdb-ripple-init style="color:white;background-color:green;font-weight:900px; border-radius:5px; border:solid 3px green;" class="btn btn-outline-dark btn-lg px-5" onclick="submitForm()">إضافة</button>
</form>

                
                <button class="cancel" onclick="closeForm()">X</button>

            </div>
        </div>
    </div>
</body>
</html>