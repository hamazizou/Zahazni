<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Promotion Zahazni Tunisie | 2019</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<style>
    .section {clear: both; padding: 0px; margin: 0px;}
    .colx {display: block; float:left; margin: 1% 0 1% 1.6%;}
    .colx:first-child {margin-left: 0;}
    
    .group:before,.group:after { content:""; display:table;}
    .group:after {clear:both;}
    .group {zoom:1;}
    
    .span_1_of_5 {width: 18.72%; min-height:327px; background:#FFF;}
    .span_12_of_12{width:100%}
    .span_3_of_12{ width:24.85% ;  font-family: Arial, Helvetica, sans-serif;}
    
    @media only screen and (max-width: 480px) { 
    .col { margin: 1% 0 1% 0%; } 
    .span_1_of_5, .span_2_of_5, .span_3_of_5, .span_4_of_5, .span_5_of_5 {width: 100%; } }
    
    /*Flash Sales Segment*/
    
    
    /* Category Segment */
    
    
    /* Generic Elements */
    
    
    /* Countdown*/
    .-font-alt-2 *{ font-family:Raleway,sans-serif}
    #clockdiv.-row{ position:absolute;  top:30%;  right:10%;  transform:translate(10%,0);  justify-content:center;  z-index:1}
    #clockdiv .-col.-content{ min-width:23rem}
    #clockdiv .-col.-content{ min-width:23rem;  margin-top:30px}
    #clockdiv .-col.-content .-col{ width: 10rem;
        height: 4rem;
        line-height: 5rem;
        padding-top: 20px;
        color: black;
        font-size: 19px;
        font-weight: bold;
        background-size: contain;
        float: left;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: -3px;
    }
    #clockdiv .smalltext{ position:absolute;  bottom:-1.5rem;  right:50%;  transform:translateX(50%);  line-height:1rem;  font-weight:300;  text-transform:capitalize}
    
    .bottom-left {    margin-top: -89px;
        z-index: 200;
        position: relative;
        margin-left: 109px;}
    .cat2:hover {-ms-transform: scale(1.1); -webkit-transform: scale(1.1);transform: scale(1.1); }
    .countpoints{ ; color:black;}
        
        
    </style>
<body>
<?PHP
include "../entites/event.php";
include "../core/eventC.php";
if (isset($_GET['id_event'])){
	$eventC=new eventC();
    $result=$eventC->recupererEvent($_GET['id_event']);
	foreach($result as $row){
    $id_event=$row['id_event'];
    $title=$row['title'];
    $date=$row['date'];
		$prix=$row['prix'];
    $reduc=$row['reduc'];
?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

    <!-- image -->
    <div style="width:1170px; padding:10px; border:1px solid white;background: white; margin-bottom:25px; margin-top:10px; position: relative; ">
        <img src="#" alt=""/>
        <a href="#" style="    position: absolute;
            text-align: center;
            display: block;
            left: 6%;
            top: 76%;
            width: 32%;
            height: 11%;
            z-index: 2;"></a>
        
        </div>
        <!-- clock -->
	<div class="bottom-left"><div class="" id="clockdiv">
        <div class="-col -content">
          <div class="col span_12_of_12">
            
            <div class="section group" style="text-align: center;display: flex;">
             <h3 style="text-align: -webkit-left;color: black;    font-size: 19px;margin-top: 44px;  font-family: Arial, Helvetica, sans-serif;">Next flash sales in :</h3>
              <center>
            <div class="-col span_3_of_12" style="width: 82px;">
              <span class="days"></span><span class="countpoints" style="">&nbsp; jour :</span>
              <span class="smalltext" data-text="days"></span></div>
            <div class="-col span_3_of_12" style="    margin-left: -10px;">
              <span class="hours"></span><span class="countpoints" style="">&nbsp; Heures :</span>
              <span class="smalltext" data-text="hours"></span>
            </div>
            <div class="-col span_3_of_12" style="    margin-left: -10px;">
              <span class="minutes"></span><span class="countpoints" style="">&nbsp; Minutes :</span>
              <span class="smalltext" data-text="minutes"></span>
            </div>
            <div class="-col span_3_of_12" style="    margin-left: -10px;">
              <span class="seconds"></span><span class="countpoints" style="">&nbsp; Seconds</span>
              <span class="smalltext" data-text="seconds"></span>
            </div>
            </center>
          </div>
          
          </div>
        </div>
        <script>
		  function getTimeRemaining(e){var n=Date.parse(e)-Date.parse(new Date),t=Math.floor(n/1e3%60),r=Math.floor(n/1e3/60%60),i=Math.floor(n/36e5%24);return{total:n,days:Math.floor(n/864e5),hours:i,minutes:r,seconds:t}}function initializeClock(e,n){var t=document.getElementById(e),r=t.querySelector(".days"),i=t.querySelector(".hours"),a=t.querySelector(".minutes"),o=t.querySelector(".seconds");
			function l(){var e=getTimeRemaining(n);r.innerHTML=e.days,i.innerHTML=("0"+e.hours).slice(-2),a.innerHTML=("0"+e.minutes).slice(-2),o.innerHTML=("0"+e.seconds).slice(-2),e.total<=0&&clearInterval(s)}
			l();
			var s=setInterval(l,1e3)}
			var deadline=<?php echo $date ?>;
			initializeClock("clockdiv",deadline);
        </script>	
      
          
    </div>  </div>
	<!-- Header section end -->



	<!-- Hero section -->
	
	<!-- Hero section end -->



	<!-- Features section -->
	
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<?php
				echo'<h2>'.$.'</h2>';
				?>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="./img/product/2.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Black and White Stripes Dress</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/3.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/4.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">TOPS</a></li>
				<li><a href="#">JUMPSUITS</a></li>
				<li><a href="#">LINGERIE</a></li>
				<li><a href="#">JEANS</a></li>
				<li><a href="#">DRESSES</a></li>
				<li><a href="#">COATS</a></li>
				<li><a href="#">JUMPERS</a></li>
				<li><a href="#">LEGGINGS</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	
	<!-- Banner section end  -->


	<!-- Footer section -->
	
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
