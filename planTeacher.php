<?php 
    include 'classPlan.php';
    session_start();
    $id= $_SESSION['id'];
    $name=$_SESSION['name'];
    $Type =$_SESSION['Type'];   
    $numPhone= $_SESSION['phone'];
    $section=$_SESSION['section'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
        .rakkas-regular {
        font-family: "Rakkas", serif;
        font-weight: 400;
        font-style: normal;
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

        .conteniar {
            grid-area: 2/8/11/11;
            border: solid 4px rgba(20, 108, 130, 1);

        }

        .SectionBar {
            background-color: rgba(20, 108, 130, 1);
            display: flex;
            border-bottom:3px solid rgba(216, 172, 85, 1);
            border-top:3px solid rgba(216, 172, 85, 1);
            grid-area: 2/1/2/11;
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

        .buttonPlan {
            width: 15%;
        }

        .buttonView:hover,
        .buttonAssignment:hover,
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
            margin-right: auto;
            font-size: 34px;
            color:rgba(20, 108, 130, 1);
        
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

        .date {
            text-align: end;
            margin: 30px;
            font-size: 24px;

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

        @media only screen and (max-width: 500px) {

            .headTitle,
            .header_button_logout,
            .header_button_back {
                font-size: 16px;
            }
        }

        .allPlan {
            background-color:rgba(20, 108, 130, 1);
            display: flex;
            width: 60%;
            flex-direction: row;
            justify-content: flex-start;
            margin-right: 20%;
            margin-left: 20%;
            margin-top: 0%;
            padding-top:2%;
            flex-wrap: wrap;
            border-left:3px solid rgba(216, 172, 85, 1);
            border-right:3px solid rgba(216, 172, 85, 1);


        }

        .plan {
            background-color: white;
            border-radius: 30px;
            border: solid 4px rgba(216, 172, 85, 1);
            width: 40%;
            margin:auto;
            /* background-color:#D1D9E1;*/
            height: 16em;
            margin-bottom: 3%;
        }

        .buttonView {
            margin-left: 35%;
            margin-right: 35%;
            width: 30%;
            border-radius: 8px;
            color: white;
            font-weight: 700;
            background-color: rgba(20, 108, 130, 1);
            padding: 10px;
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
            bottom: 34%;
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
            right: 50%;
            top: 15%;
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


    </style>
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
            xhr.open("POST", "addPlan.php", true);
            xhr.send(formData);
        }    
    </script>
</head>

<body>
    <div class="body">
        <div class="taskBar rakkas-regular">
            <img class="logoPage" src="assets/logo/logoForqan.png">
            <div class="headTitle">مركز الفرقان القراني</div>
            <button onclick="openForm()" class="buttonPlan"> خطة جديدة</button>
            <div onclick="back()" class="header_button_back">عودة</div>
        </div>
        <div class="SectionBar rakkas-regular">
            <div class="nameTeacher"><span>اسم الطالب :</span><?php echo $_GET["nameT"];?> </div>
        </div>
    </div>
    <div class="allPlan rakkas-regular">
            
                <?php 
                    getPlan($_GET['id_student']);
                ?>
            
    </div>
    <!--This form-->
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
                            <label class="form-label" for="typeEmailX">تاريخ البدء</label>
                            <input type="date" name="startDate" require id="typeEmailX"
                                class="form-control form-control-lg" />
                        </div>
                        <div data-mdb-input-init class="form-outline form-dark mb-2">
                            <label class="form-label" for="typeEmailX">تاريخ الانتهاء</label>
                            <input type="date" name="endDate" require id="typeEmailX"
                                class="form-control form-control-lg" />
                        </div>
                        <input type="hidden" name="id_student" value="<?php echo $_GET['id_student']; ?>" ></input>  
                        <input type="hidden" name="nameT" value="<?php echo $_GET['nameT']; ?>" ></input>  
                        <br>
                        <button data-mdb-button-init data-m db-ripple-init
                            style="color:white;background-color:green;font: weight 900px; border-radius:5px; border:solid 3px green; "
                            class="btn btn-outline-dark btn-lg px-5" onclick="submitForm()">إضافة</button>
                        </div>
                    </form>
                
                <button class="cancel" onclick="closeForm()">X</button>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>