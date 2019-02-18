<?php
include 'core/init.php';

if (empty($_POST) === false) {
	$required_fields = array('name', 'email', 'phone', 'message');
	foreach($_POST as $key=>$value) {
		if(empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with an asterisk are reqiured';
			break 1;
		}
	}
}
?>
<!DOCTYPE html>
<?php 
if (isset($_GET['success']) && empty($_GET['success'])) {
?>
			<body onload="contactalert()">


<script>
function contactalert() {
    alert("Thanks for your response.");
}
</script>

</body>
<?php
} else {
	if (empty($_POST) === false && empty($errors) === true) {
		$contact_data = array(
			'name'			=> $_POST['name'],
			'email'			=> $_POST['email'],
			'phone'		=> $_POST['phone'],
			'message'		=> $_POST['message'],
			);
		contact_us($contact_data);
				header('Location: index.php?success');

				?>
				<?php
		exit();
	} else if(empty($errors) === false) {
		echo output_errors($errors);
		exit();
	}
}
	?>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>foods- Food Lover's Paradise</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/struct/css/style.css">
  <link rel="stylesheet" href="assets/food/css/food-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/sidebtn.css" type="text/css">
    <link rel="stylesheet" href="assets/about.css">
	<link rel="stylesheet" href="assets/gallery/style.css">
  
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
</head>
<body>
<section class="menu cid-qJS8Ch77J3" once="menu" id="menu2-t">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                        <img src="assets/images/logo.png" alt="food" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="#home">
                        Home
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="#services">
                        Our Services
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="#menu">
                        Our Menu
                    </a>
                </li>
				<li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="#todayspecial">
                        Today's Special
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="#chefs">
                        Our Chefs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="#contactus">
                        Contact Us
                    </a>
                </li></ul>
            <div class="navbar-buttons food-section-btn"><a class="btn btn-sm btn-primary display-4" href="#">
                    <i class="fas fa-ticket-alt"></i>&nbsp
                    Book a Table
                </a></div>
        </div>
    </nav>
</section>
<section class="header6 cid-qJS6gPh5Ad food-fullscreen" data-bg-video="https://www.youtube.com/watch?v=t4gN-iqeY0E" id="home">

    <div class="food-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="food-white col-md-10">
                <h1 class="food-section-title align-center food-bold pb-3 food-fonts-style display-1">
                    <br>A FOOD LOVERS PARADISE
					</h1>
                <p class="food-text align-center pb-3 food-fonts-style display-5">
                    Where food speaks with your palate and taste meets the myth.
                </p>
                <div class="food-section-btn align-center"><a class="btn btn-md btn-warning display-4" href="">Book a Table</a>
                        <a class="btn btn-md btn-white-outline display-4" href="">Order Online</a></div>
            </div>
        </div>
    </div>

    <div class="food-arrow hidden-sm-down" aria-hidden="true">
        <a href="#services">
            <i class="foodi-down food-iconfont"></i>
				<i class="fas fa-arrow-down"style="font-size:40px;text-align:center;"></i>
		</a>
    </div>
</section>

<audio autoplay >
  <source src="assets/videoplayback.mp3" type="audio/mpeg" id="banneraudio">
</audio>
<!-- Button trigger modal -->
<button type="button" class="feedback-button" data-toggle="modal" data-target="#myModal">
 Order Online
  </button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Order food Online</h4>
      </div>
      <div class="modal-body">
	  <p style="font-family:sans-serif;font-size:16px;color: #323232;font-weight:100;padding-top:10px;"><strong>Choose your food.. :) </strong>  </p>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>
<section class="features1 cid-qJS9CgUEFt" id="services">
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="foodi"><i class="fas fa-bed"></i></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 food-fonts-style display-5" href="">
                            Book a Hotel
                    </h4>
                    <p class="food-text food-fonts-style display-7">
    We help you in getting best deals on hotel booking with our partner hotels. 
                                           
				   </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="foodi"><i class="fas fa-shopping-basket"></i></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 food-fonts-style display-5">
    Wanted Chef
                                           
				   </h4>
                    <p class="food-text food-fonts-style display-7">
                    		We provide Chef for any of your party or for any event.
                    
					</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="foodi"><i class="fas fa-utensils"></i></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 food-fonts-style display-5">
                            Catering
                    
					</h4>
                    <p class="food-text food-fonts-style display-7">
                            We provide Catering services at a site such as a hotel, cruise ship, park, filming site or studio, entertainment site, or event venue.
					</p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="features17 cid-qJSi1MbzJv" id="menu" style="background-image:url(http://www.rockyspizzaclt.com/wp-content/uploads/2014/07/menubackground.png)">
    
    <div class="container-fluid">
	
	<h2 class="pb-3 food-fonts-style food-section-title display-2" style="font-family:Courgette;text-align:center;color:white">
            Our Menu
        </h2>
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-2" >
                <a class="card-wrapper" >
                    <div class="card-img">
                        <img  src="https://s3.amazonaws.com/tce-live2/media/media/42bfb23f-38e3-4198-9336-5aa22b75093e.jpg" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 food-fonts-style display-7">
                            Indian
                        </h4>
                        <p class="food-text food-fonts-style display-7">
							Indian cuisine consists of a wide variety of regional and traditional cuisines. Given the range of diversity in soil type, climate,and culture these cuisines vary substantially from each other.
							</p>
                    </div>
                </a>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-2">
                <a class="card-wrapper">
                    <div class="card-img">
                        <img src="https://media.timeout.com/images/105147413/image.jpg" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 food-fonts-style display-7">
                            Chinese
                        </h4>
                        <p class="food-text food-fonts-style display-7">
                            Chinese cuisine is an important part of Chinese culture, which includes cuisine originating from the diverse regions of China, as well as from Chinese people in other parts of the world.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-2">
                <a class="card-wrapper">
                    <div class="card-img">
                        <img src="https://media.timeout.com/images/101801321/image.jpg" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 food-fonts-style display-7">
                            Thai
                        </h4>
                        <p class="food-text food-fonts-style display-7">
                            Thai cuisine is the national cuisine of Thailand. Balance, detail, and variety are of paramount significance to Thai chefs. Thai cooking places emphasis on lightly prepared dishes with spicy edge
                        </p>
                    </div>
                </a>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-2">
                <a class="card-wrapper">
                    <div class="card-img">
                        <img src="https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/kh3j9tolpqn70xy8gqzh" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 food-fonts-style display-7">
                            Mughlai
                        </h4>
                        <p class="food-text food-fonts-style display-7">
                            Mughlai cuisine consists of dishes developed in Medieval India at the centers of the Mughal Empire. It represents a combination of the cooking style and recipes of Asia and North India.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-2">
                <a class="card-wrapper">
                    <div class="card-img">
                        <img src="http://www.contentmenthealth.com/wp-content/uploads/2016/11/Surla_Moondogphoto_Hi_Res-4754.jpg" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 food-fonts-style display-7">
                            Italian Cusine
                        </h4>
                        <p class="food-text food-fonts-style display-7">
						Italian cuisine is generally characterized by its simplicity, with many dishes having only two to four main spices.Italian cooks rely chiefly on the quality of the ingredients that vary by region.
						</p>
                    </div>
                </a>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-2">
                <a class="card-wrapper">
                    <div class="card-img">
                        <img src="http://aldlimo.com/wp-content/uploads/top-zagat-rated-seafood-restaurants-close-sarasota-airport.jpeg" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 food-fonts-style display-7">
                            Seafood
                        </h4>
                        <p class="food-text food-fonts-style display-7">
							Seafood is any form of sea life regarded as food by humans. Seafood prominently includes fish and shellfish. Shellfish include various species of molluscs, crustaceans, and echinoderms.
					   </p>
                    </div>
                </a>
            </div>
        </div>
    </div>


</section>

<section class="carousel slide cid-qJZ3LqEZu3" style="padding-top:50px;padding-bottom:60px;" id="slider2-13" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="2500" id="todayspecial">

	<h2 class="pb-3 food-fonts-style food-section-title display-2" style="font-family:Shadows Into Light;text-align:center;color:black">
            <b>Today's Special</b>
        </h2>
    <div class="container content-slider" >
        <div class="content-slider-wrap">
            <div>
				<div class="food-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
					<ol class="carousel-indicators">
						<li data-app-prevent-settings="" data-target="#slider2-13" class=" active" data-slide-to="0"></li>
						<li data-app-prevent-settings="" data-target="#slider2-13" data-slide-to="1"></li>
						<li data-app-prevent-settings="" data-target="#slider2-13" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" >
							<div class="container container-slide">
								<div class="image_wrapper">
									<div class="food-overlay"></div><img style="width:100%;" src="http://del.h-cdn.co/assets/cm/15/11/980x490/54fea568f3281-ginger-crusted-salmon-melon-salsa-recipe-ghk0711-s2.jpg">
									<div class="carousel-caption justify-content-center">
										<div class="col-10 align-center">
											<p class="lead food-text food-fonts-style display-7">It is one of the signature dishes of Kashmir, Robust with varied spices.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false">
							<div class="container container-slide">
								<div class="image_wrapper">
									<div class="food-overlay"></div><img style="width:100%;" src="http://del.h-cdn.co/assets/17/35/980x490/landscape-1504289038-delish-cheesy-garlic-butter-potatoes-still003.jpg">
									<div class="carousel-caption justify-content-center">
										<div class="col-10 align-center">
											<p class="lead food-text food-fonts-style display-7">A stunner of a recipe, this one gets the Bengali flavours just right.
</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false">
							<div class="container container-slide">
								<div class="image_wrapper">
									<div class="food-overlay"></div><img style="width:100%;" src="http://del.h-cdn.co/assets/17/13/980x490/landscape-1490739892-delish-breakfast-boats-2.jpg">
									<div class="carousel-caption justify-content-center">
										<div class="col-10 align-center">
											<p class="lead food-text food-fonts-style display-7">A famous Nawabi recipe from Lucknow passed down through generations.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-13"><span aria-hidden="true" class="foodi-left food-iconfont"></span><span class="sr-only">Previous</span></a>
					<a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-13"><span aria-hidden="true" class="foodi-right food-iconfont"></span><span class="sr-only">Next</span></a>
				</div>
			</div> 
        </div>
    </div>
	
</section>
<section class="features16 cid-qJShfMBy9V" id="chefs">
    <div class="container align-center">
        <h2 class="pb-3 food-fonts-style food-section-title display-2">
            MEET OUR CHEFS
        </h2>
        <h3 class="pb-5 food-section-subtitle food-fonts-style food-light display-5">
           If there’s one thing you need to know about our chefs, it’s this: They want to hear from you. If you have a question, a comment, a suggestion or a critique, let them know. They make a point of making themselves available in the dining halls, so feel free to walk right up and chat. And don’t be surprised if they do the same.
        </h3>
        <div class="row media-row">            
		<div class="tts-cards-col col-xs-12 col-lg-6" style="padding-top: 40px; padding-bottom: 0px;">
            <div class="container">
<div class="card cart-block infohover">
                    <div class="card-img"><img class="img-responsive img-rounded center" src="assets/images/download.jpg" alt="Kunal" style="width:160px;height:160px;border-radius:50%; border:1px solid grey;"/></div>
                    <div class="card-block">
                        <font class="card-title" style="padding-top:20px;font-size:24px;font-weight:400;color:#323232;">Kunal Goyal</font><br>
                        <font class="card-subtitle" style="padding-top:20px;font-size:20px;font-weight:300;color:#323232;">Chef</font>

                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            
                        </a>
                        <a href="#" target="_blank">    
                            
                        </a>
                    </div>                        
						</div>
<div class="overlay">
    <div class="text"> 
	<div class="row">
	<div class="col-md-2">
	<img class="img-responsive img-rounded center" src="assets/images/download.jpg" alt="kunal" style="width:70px;height:70px;border-radius:50%; border:1px solid grey;"/>
	</div>

<div class="col-md-9 col-md-offset-1">
<p style="text-align:center;">
<font style="font-size:18px;"><strong>Kunal Goyal</strong></font><br>
	<font class="card-subtitle" style="padding-top:20px;font-size:20px;font-weight:300;color:#ffffff;">Chef</font>
                        
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                        </a>
                        <a href="#" target="_blank">                              
                        </a>
                    </div>
</p>
	</div>
	</div>
	
	<div class="row">
	<p style="text-align:left;font-size:13px;padding:12px 0px 0px 0px;">About the chef..</p>
	
	</div>
  </div>               
			   </div>
</div>
</div>
</div>
 <div class="tts-cards-col col-xs-12 col-lg-6" style="padding-top: 40px; padding-bottom: 0px;">
            <div class="container">

<div class="card cart-block infohover">
                    <div class="card-img"><img class="img-responsive img-rounded center" src="assets/images/images.jpg" alt="somya" style="width:160px;height:160px;border-radius:50%; border:1px solid grey;"/></div>
                    <div class="card-block">
                        <font class="card-title" style="padding-top:20px;font-size:24px;font-weight:400;color:#323232;">Somya Tandon</font><br>
                        <font class="card-subtitle" style="padding-top:20px;font-size:20px;font-weight:300;color:#323232;">Chef</font>
                        
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        
                        <a href="#" target="_blank">
                            
                        </a>
                        <a href="#" target="_blank">    
                            
                        </a>
                    </div>
                    </div>
                <div class="overlay">
    <div class="text"> 
	<div class="row">
	<div class="col-md-2">
	<img class="img-responsive img-rounded center" src="assets/images/images.jpg" alt="Somya" style="width:70px;height:70px;border-radius:50%; border:1px solid grey;"/>
	</div>
<div class="col-md-9 col-md-offset-1">
<p style="text-align:center;">	
<font style="font-size:18px;"><strong>Somya Tandon </strong></font><br>
<font class="card-subtitle" style="padding-top:20px;font-size:20px;font-weight:300;color:#ffffff;">Chef</font>
                        
                    <div class="item-social pt-2">
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-twitter socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-facebook socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="p-1 socicon-googleplus socicon food-iconfont food-iconfont-social"></span>
                        </a>
                        <a href="#" target="_blank">
                            
                        </a>
                        <a href="#" target="_blank">    
                            
                        </a>
                    </div>
	</p>
	</div>
	</div>
	
	<div class="row">
	<p style="text-align:left;font-size:13px;padding:12px 0px 0px 0px;">About the chef..</p>
	
	</div>
  </div>
				</div>
				</div>
</div>
</div>	
			</div>    
    </div>
    
</section>

<section class="carousel slide testimonials-slider cid-qJSlqpdcMW" id="testimonials">
    
    

    

    <div class="container text-center">
        <h2 class="pb-5 food-fonts-style display-2">
            WHAT PEOPLE ARE SAYING
        </h2>

        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner">
                
                
            <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/face.jpg">
                        </div>
                        <div class="user_text pb-3">
                            <p class="food-fonts-style display-7">
                         food was good both by taste and quality as wel as quality. Staffs were well behaved. I Liked this place a lot and would like to come again and again here.   </p>
                        </div>
                        <div class="user_name food-bold pb-2 food-fonts-style display-7">
                            Mayank
                        </div>
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/face.jpg">
                        </div>
                        <div class="user_text pb-3">
                            <p class="food-fonts-style display-7">
							I Love this place, the quality and the taste of the food was awesome.
                            </p>
                        </div>
                        <div class="user_name food-bold pb-2 food-fonts-style display-7">
                            Prerna
                        </div>
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/face.jpg">
                        </div>
                        <div class="user_text pb-3">
                            <p class="food-fonts-style display-7">
								The food here is just awesome. They even provide late night services and the staffs are well behaved.
						  </p>
                        </div>
                        <div class="user_name food-bold pb-2 food-fonts-style display-7">
                            Saumya
                        </div>
                        
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/face.jpg">
                        </div>
                        <div class="user_text pb-3">
                            <p class="food-fonts-style display-7">
                        food is good but the place is very cozy.    </p>
                        </div>
                        <div class="user_name food-bold pb-2 food-fonts-style display-7">
                            Sammer
                        </div>
                    </div>
                </div></div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                  <span aria-hidden="true" class="foodi-arrow-prev food-iconfont"></span>
                  <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" role="button" data-slide="next">
                  <span aria-hidden="true" class="foodi-arrow-next food-iconfont"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="food-section form4 cid-qJSaookAC9" id="contactus">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJ47Ul7GFyAjoR4qsqYQvLMCc" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left food-fonts-style display-2">
                    Drop a Line
                </h2>
                <div>
                    <div class="icon-block pb-3">
                        <span class="icon-block__icon">
                            <span class="foodi-letter food-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left food-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left food-fonts-style display-7">
                            Ready for offers and cooperation
                        </h5>
                        <p class="food-text align-left food-fonts-style display-7">
                            Phone: +91 0621 2249316 <br>
                            Email: yourfoods@gmail.com
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    
                    <form class="block food-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Name" required="" id="name-form4-x">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-form4-x">
                            </div>
                            <div class="col-md-12" data-for="email">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-x">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none" id="message-form4-x"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button href="" type="submit" class="btn btn-form btn-warning display-4">SEND MESSAGE</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer4 cid-qJS7wVnqzI food-reveal" id="footer4-r">

    

    

    <div class="container">
        <div class="media-container-row content food-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <p class="mb-3 food-fonts-style foot-title display-7">
                    foods
                </p>
                <p class="food-text food-fonts-style food-links-column display-7">
                    <a href="#" class="text-white">About Us</a>
                    <br><a href="#" class="text-white">Services</a>
                    <br><a href="#" class="text-white">Chefs</a>
                    <br><a href="#" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title food-fonts-style display-7">
                    TODAYS OFFER
                </p>
                <p class="food-text food-fonts-style foot-text display-7">
				Time to Dineout: 10% Off the food Bill<br>
				30% Off the Total Bill(Between 4-6pm)
			  </p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title food-fonts-style display-7">
                    SUBSCRIBE
                </p>
                <p class="food-text food-fonts-style form-text display-7">
                    Get update of our daily offers.
                </p>
                <div class="media-container-column" data-form-type="formoid">
                    

                    <form class="form-inline" action="" method="post">
                        
                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-r">
                        </div>
                        <div class="input-group-btn m-2"><button href="" class="btn btn-danger display-4" type="submit" role="button">Subscribe</button></div>
                    </form>
                </div>
                <p class="mb-4 food-fonts-style foot-title display-7">
                    CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://twitter.com" target="_blank">
                                <span class="socicon-twitter socicon food-iconfont food-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com" target="_blank">
                                <span class="socicon-facebook socicon food-iconfont food-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com" target="_blank">
                                <span class="socicon-youtube socicon food-iconfont food-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com" target="_blank">
                                <span class="socicon-instagram socicon food-iconfont food-iconfont-social"></span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row food-white">
                <div class="col-sm-12 copyright">
                    <p class="food-text food-fonts-style display-7">
                        © Copyright 2018 foods - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/food-testimonials-slider/food-testimonials-slider.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/food/js/script.js"></script>
  <script src="assets/struct/js/script.js"></script>
  <script src="assets/volume.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  
</body>
</html>
