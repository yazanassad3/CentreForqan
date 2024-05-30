<?php
    session_start(); 
    $id= $_SESSION['id'];
    $name= $_SESSION['name'];
    $Type =$_SESSION['Type'];
    if(isset($_GET['section']))
    $id_section = $_GET['section'];
    $showElement= ($Type=='student')?false:true;
    include "classAssignment.php";
    if($showElement)
    $assignments=viewAllAssignmentSection($id_section);
    else
    $assignments=viewAllAssignmentSection(getIdSection($id));
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الواجبات</title>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        function openForm2(id) {
            document.getElementById("studentForm").style.display = "block";
            document.getElementById("studentIdInput").value = id;
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        function closeForm2() {
            document.getElementById("studentForm").style.display = "none";
        }
        function closeForm2() {
            document.getElementById("stuForm").style.display = "none";
        }
        function openForm3(id) {
            document.getElementById("stuForm").style.display = "block";
        }
        
        function logout() {
                if(confirm("logout from account?!"))
                window.location.href='http://localhost/alforqanCentre/CentreForqan/sign_in.php';
            }
        function back(type) {
            if(confirm("back to teacher page?!"))
            if(type)    
            window.location.href='../teacher.php';
            else
            window.location.href='student.php';

        }
        function SubmitEventStudent() {
            var formData = new FormData(document.getElementById("former"));
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById("response").innerHTML = xhr.responseText;
                    } else {
                        alert('There was a problem with the request.');
                    }
                }
                closeForm2();
            };
            xhr.open("POST", "addSubmission.php", true);
            xhr.send(formData);
            window.location.reload();
        } 
        function SubmitEventTeacher() {
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
            xhr.open("POST", "addAssignment.php", true);
            xhr.send(formData);
            window.location.reload();
            closeForm();
        }   
    </script>
    <style>
        .aaa{
            top:15%;
        }
    </style>
    <link rel="stylesheet" href="styleAss.css">
</head>

<body dir="rtl">
    <div class="body rakkas-regular">
            <div class="taskBar">
                <button class="header_button_logout" onclick="logout()">خروج</button>
                <div onclick="back(<?php echo $showElement; ?>)" class="header_button_back">عودة</div>
                <div class="headTitle">مركز الفرقان القراني</div>
                <img class="logoPage" src="../assets/logo/logoForqan.png">
            </div>
    </div>
    <div class="mb-8 rakkas-regular">
        <h1 class="text-3xl font-bold">الواجبات</h1>
    </div>
    <main class="container ">
        <div class="grid">
            <?php foreach($assignments as $assignment){ ?>
            <div class="card">
                <div class="card-content">
                    <h2 class="text-xl font-semibold mb-2"><?php echo $assignment['title'];?></h2>
                    <p class="text-gray-500 mb-4 rakkas-regular">
                    <?php echo $assignment['description'];?>
                    </p>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-500">الموعد: <?php echo $assignment['deadline']; ?></span>
                        <?php 
                        if(!$showElement)
                            echo '<button onclick="openForm2('.$assignment['Id_assign'].')" class="button">تقديم الإجابة</button>';
                        else
                            echo '<button onclick="openForm3('.$assignment['Id_assign'].')" class="button">عرض الحلول</button>';
                    
                    ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- Other assignment cards go here -->
        </div>
        <br>
        <?php if($showElement): ?>
        <div class="mt-8 flex justify-end">
            <button class="button" onclick="openForm()">إنشاء واجب جديد</button>
        </div>
        <?php endif; ?>
        <div class="form-popup" id="myForm">
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 transition-opacity">
            <div class="bg-white dark:bg-gray-950 rounded-lg shadow-md p-6 w-full max-w-md">
                <h2 class="text-2xl font-bold mb-4">إنشاء واجب جديد</h2>
                <form  id="myforms">
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-400 font-medium mb-2" for="title">العنوان</label>
                        <input require class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 dark:focus:ring-gray-400" id="title" name="title" placeholder="ادخل عنوان الواجب" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-400 font-medium mb-2" for="description">الوصف</label>
                        <textarea require class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 dark:focus:ring-gray-400" id="description" name="description" placeholder="ادخل وصف الواجب"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-400 font-medium mb-2" for="deadline">الموعد النهائي</label>
                        <input require class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 dark:focus:ring-gray-400" id="deadline" name="deadline" type="date">
                    </div>
                    <input type="hidden" id='studentIdInput' name='id_section' value='<?php echo $_GET['section']; ?>'></input>

                    <div class="flex justify-end">
                        <button class="inline-flex items-center justify-center rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300" type="button" onclick="SubmitEventTeacher()">إنشاء</button>
                        <button class="inline-flex items-center justify-center rounded-md border border-gray-200 border-gray-200 bg-white px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 ml-2" type="button" onclick="closeForm()">إلغاء</button>
                    </div>
                </form>
                </div>
            </div>   
        </div>
    
            <!-- Code for student -->
        <div class="form-popup" id="studentForm" >
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 transition-opacity">
            <div style="background-color:#D1D9E1;border:solid 3px rgba(20, 108, 130, 1);" class="bg-white dark:bg-gray-950 rounded-lg shadow-md p-6 w-full max-w-md">
                <h2 class="text-2xl font-bold mb-4"> تقديم حل</h2>
                <form id="former">
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-400 font-medium mb-2" for="description">الاجابة</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 dark:focus:ring-gray-400" id="description" name="description" placeholder="ادخل وصف الواجب"></textarea>
                </div>
                <input type="hidden" id='studentIdInput' name='id_assign'></input>
                    <div class="flex justify-end">
                        <button class="header_button_logout" style="font-size: 20px;" type="button" onclick="SubmitEventStudent()">تقديم</button>
                        <button class="inline-flex items-center justify-center rounded-md border border-gray-200 border-gray-200 bg-white px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 ml-2" type="button" onclick="closeForm2()">إلغاء</button>
                    </div>
                </form>
                </div>
            </div>   
        </div>
        <div class="form-popup aaa" id="stuForm" >
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 transition-opacity">
            <div style="background-color:#D1D9E1;border:solid 3px rgba(20, 108, 130, 1);" class="bg-white dark:bg-gray-950 rounded-lg shadow-md p-6 w-full max-w-md">
                <h2 class="text-2xl font-bold mb-4"> تقديم حل</h2>
                <form id="former">
                <div class="mb-4">
                    <?php         
                
                    $conn = mysqli_connect("localhost:3307", "root", "", "forqancentre");
                    $query = "SELECT * FROM answers";
                    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
                    while($row = $result->fetch_assoc()) {
                    echo '<label class="block text-gray-700 dark:text-black-400 font-medium mb-2" for="description">الاجابة</label>';
                    echo '<p class="block text-gray-700 dark:text-black-400 font-medium mb-2" for="description">'.$row['description'].'</p>';
                    }
                    ?>
                </div>
                <input type="hidden" id='studentIdInput' name='id_assign'></input>
                    <div class="flex justify-end">
                        <button class="inline-flex items-center justify-center rounded-md border border-gray-200 border-gray-200 bg-white px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 ml-2" type="button" onclick="closeForm2()">إلغاء</button>
                    </div>
                </form>
                </div>
            </div>   
        </div>
    </main>
</body>
</html>
