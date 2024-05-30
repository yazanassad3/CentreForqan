<?php
	include "news.php";
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rakkas&display=swap" rel="stylesheet">
        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
        <!-- title of site -->
        <title>مركز الفرقان القراني</title>

        <!-- For forqan png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/forqan.jpg"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<style>
			.dateAct {
				display:flex;
				justify-content: flex-start;
				flex-direction:column;
				margin-right:auto;
				align-items:flex-end;
				color:rgba(20, 108, 130, 1);
			}
			.single-testimonial-box {
            	border-radius: 25px;
        	}
			::-webkit-scrollbar {
			width: 10px;
			}
			
			.rakkas-regular {
				font-family: "Rakkas", serif;
				font-weight: 400;
				font-style: normal;
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
			.navvv{
				color: #1A5F6F;
				font-size:50px;
			}
		</style> 	
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area rakkas-regular" >
			<div class="header-area" >
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.php"><img src="assets/logo/logoForqan.png" style="width: 80px;"></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
								<li class="scroll"><a href="#footer">التواصل</a></li>
			                    <li class="scroll"><a href="#activity">الأنشطة</a></li>
								<li class="scroll"><a href="#works">حول المركز</a></li>
			                    <li class="scroll"><a href="#reviews ">اخر الاخبار</a></li>
		                        <li class=" scroll active"><a href="#home">الصفحة الرئيسية</a></li>
							</ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<div class="rakkas-regular" style="font-size:70px; font: weight 900px; color:white;">
						مركز الفرقان القرآني
					</div>
				</div>
				<div class="welcome-hero-serch-box">
					<div class="welcome-hero-search">
						<button class="welcome-hero-btn rakkas-regular" onclick="window.location.href='sign_in.php'">
						 تسجيل الدخول  
						</button>
					</div>
				</div>
			</div>
		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		



		
		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<div class="navvv rakkas-regular">آخر الأخبار</div>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <?php 
						viewNews();
					?>
				</div>
			</div>
		</section><!--/.reviews-->
		<!--reviews end -->
		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
				<div class="navvv rakkas-regular">حول المركز</div>
					
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">رؤيتنا</a></h2>
								<p>
								يهدف مركزنا إلى نشر وتعليم القرآن الكريم وفقاً لأحدث الطرق والأساليب التعليمية الحديثة. نسعى لبناء جيل متقن لتلاوة وحفظ كتاب الله، ومتمسك بقيمه وتعاليمه، قادر على أن يكون قدوة في المجتمع.								</p>
								
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="#">رسالتنا</a></h2>
								<p>
								نحن ملتزمون بتقديم تعليم متميز للقرآن الكريم وتجويده، من خلال برامج تعليمية متنوعة تناسب جميع الأعمار والمستويات. نسعى لبناء بيئة تعليمية تشجع على التعلم والتحفيز الذاتي، مع التركيز على الفهم العميق لمعاني القرآن الكريم.								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">خدماتنا</a></h2>
								<p>
								يوفر مركزنا العديد من الخدمات التعليمية بما في ذلك:
دورات تعليمية لحفظ القرآن الكريم
دروس تجويد لكافة المستويات
دورات تحفيظ للأطفال والكبار
برامج قرآنية في رمضان والأعياد
جلسات تدبر وتفسير القرآن الكريم								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->
		<!--reviews start -->
		<section id="activity" class="reviews">
			<div class="section-header">
				<div class="navvv rakkas-regular">الأنشطة</div>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
					<?php 
						viewActivity();
					?>
				</div>
			</div>

		</section><!--/.reviews-->
		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container rakkas-regular">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">300 </div> 
							</div><!--/.statistics-content-->
							<h3>المنتسبين</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">40</div> 
							</div><!--/.statistics-content-->
							<h3>الحفاظ</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">25</div>
							</div><!--/.statistics-content-->
							<h3>المعلمين</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">10</div>
							</div><!--/.statistics-content-->
							<h3>الإداريين</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.counter-->	
		<!-- statistics end -->

		


		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <img style="width: 80px;" src="assets/logo/logoForqan.png" alt="">
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item rakkas-regular">
			                    <!--<li class="scroll"><a href="">تسجيل الدخول</a></li>-->
								<li class="scroll"><a href="#works">حول المركز</a></li>
			                    <li class="scroll"><a href="#reviews ">اخر الاخبار</a></li>
		                        <li class=" scroll active"><a href="#home">الصفحة الرئيسية</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							
		
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone">+962 7 8102 6321</i></span>
								<a href="https://www.facebook.com/forqan.center"><i class="fa fa-facebook"></i></a>	
								<a href="https://www.instagram.com/forqancentre/"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/@FurqanCenter"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>