<!DOCTYPE html>
<html>
<head>
<?php include('essentials.php') ?>
	<title>Restaurants</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="cssr/bootstrap.min.css">
	<link rel="stylesheet" href="cssr/style.css">
	<style>
    		@import url('https://fonts.googleapis.com/css?family=Numans');

        #mainaim{
            background-image: url('https://images.pexels.com/photos/243116/pexels-photo-243116.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
            background-position: center;
            background-size: cover;
            height: 600px;
            
        }
        .main-aim-heading{
            padding-top: 5%;
            font-family: 'Permanent Marker', cursive;
            color: white;
            letter-spacing: 1px;
            font-size: 450%;
         
        }
        .main-aim-para{
            font-family:'Roboto', sans-serif;
            color:white;
            letter-spacing: 1px;
            font-size:150%;
       
        }
        #newheading{
            font-family: 'Patua One', cursive;
            color: black;
            
        }
        #newpara{
            font-family: 'Lato', sans-serif;
            font-size: 130%;
            word-spacing: 1px;
            font-weight: 100;
            color: black;
          
        }
        #imagnew{
            background-image: url('https://images.pexels.com/photos/1051075/pexels-photo-1051075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
            background-repeat: no-repeat;
            height: 380px;
            text-shadow: 2px 2px 4px black; 

        }
        #findheading{
            font-family: 'Patua One', cursive;
            color: black;       
        }
        
        #findpara{
            font-family: 'Lato', sans-serif;
            font-size: 130%;
            word-spacing: 1px;
            color: black;
            
        }

        #imagfind{
            background-image: url('https://images.pexels.com/photos/63572/pexels-photo-63572.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
            background-repeat: no-repeat;
            height: 380px;
            background-position: center;
            background-size: contain;
            
        }
        #find
        {
            overflow-x: hidden; overflow-y: auto;
        }
        #filterpara{
            font-family: 'Lato', sans-serif;
            word-spacing: 1px;
            color:black;
        }
        #filterimag{
            margin-right: auto;
            padding-left: 35%;
            padding-right: 23%;
        }
        #explorebrand{
            font-family: 'Permanent Marker', cursive;
            font-size: 160%;
        }
        .navbar{
            background-color: rgb(68, 212, 123);
        }
        .top-nav-collapse {
             background-color: rgb(68, 212, 123);
       }
  
        #registerbuttons1{
            background-color: rgb(68, 212, 123);
            margin-top: 20%;
            margin-left: 30%;
            color: white;
         
        }
        #registerbuttons{
            background-color: rgb(68, 212, 123);
            margin-top: 20%;
            margin-left: 10%;
            color: white;
      
        }
        #buttondrop{
            border: none;
            box-shadow: none;
        }
       @media only screen and (max-width: 768px) {
    .navbar {
        background-color: rgb(68, 212, 123);
    }
    #registerbuttons{
        margin-top: 0%;
        margin-left: 0%;
    }
    #registerbuttons1{
        margin-top: 0%;
        margin-left: 0%;
    }
    
}
    
@media only screen and (max-width: 575px) {
    .main-aim-heading {
        font-size: 315%;
    }
}
    </style>
</head>
<body>
<?php include('header.php'); ?>
	<div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1>Restaurants</h1>
							<h4>Dine or Take away</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<br><br>
	<div id="section2">
		<section id="feature-area" class="about-section">
			<div class="container">
				<div class="row text-center inner">
					<div class="col-sm-4">
						<div class="feature-content">
							<img src="https://images.unsplash.com/photo-1525648199074-cee30ba79a4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Image">
							<h2 class="feature-content-title green-text">New Ones</h2>
							<p class="feature-content-description">The newest and the coolest place to dine in Peelamedu.</p>
							<a href="newones.php" class="feature-content-link green-btn">Go!!</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="feature-content">
							<img src="https://images.unsplash.com/photo-1520099940286-947795ff7b42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Image">
							<h2 class="feature-content-title blue-text">Affordable Eating</h2>
							<p class="feature-content-description">.Eat well.Stay strong.Less cost.</p>                    
							<a href="affordable_restaurant.php" class="feature-content-link blue-btn">Go!!</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="feature-content">
							<img src="https://images.unsplash.com/photo-1484659619207-9165d119dafe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=800" alt="Image">
							<h2 class="feature-content-title green-text">Old Is Gold</h2>
							<p class="feature-content-description">Oldest Restaurants but still with the most tasty items in peelamedu.</p>
							<a href="oldisgold.php" class="feature-content-link green-btn">Go!!</a>
						</div>
					</div>
				</div>
			</div>
		</section>
						<script src="jsr/jquery-1.11.2.min.js"></script>
						<script src="jsr/jquery.scrollUp.min.js"></script> 
						<script src="jsr/parallax.js-1.3.1/parallax.js"></script> 
						<script>
    $(function() {  
        $('.intro-section').parallax({
        	imageSrc: 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
        	speed: 0.2
        });
        $('.services-section').parallax({
        	imageSrc: 'img/bg-2.jpg',
        	speed: 0.2
    	});
        $('.contact-section').parallax({
        	imageSrc: 'img/bg-3.jpg',
        	speed: 0.2
        });    

        $.scrollUp({
                scrollName: 'scrollUp',      
		        scrollDistance: 300,         
				scrollFrom: 'top',          
				scrollSpeed: 1000,           
		        easingType: 'linear',       
		        animation: 'fade',           
		        animationSpeed: 300,         		        
		        scrollText: '',		        
		        scrollImg: true           	        
            });

        $( window ).on( 'scroll', function() {
            if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {

                $('#scrollUp').css( 'bottom', '80px' );

            } else {      
                $('#scrollUp').css( 'bottom', '30px' );        
            }
        });

        $('.single-page-nav').singlePageNav({
        	offset: $('.single-page-nav').outerHeight(),
        	speed: 1500,
        	filter: ':not(.external)',
        	updateHash: true
        });

        $('.navbar-toggle').click(function(){
        	$('.single-page-nav').toggleClass('show');
        });

        $('.single-page-nav a').click(function(){
        	$('.single-page-nav').removeClass('show');
        });
        
    });
</script>
 <?php include('footer.php'); ?>
</body>
</html>