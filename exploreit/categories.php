<!DOCTYPE html>
<html lang="en">
	<head>
	<?php include('essentials.php') ?>
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Categories</title>
		<link href="csscat/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Archivo+Black|Fredoka+One|Passion+One|Patua+One|Permanent+Marker|Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="csscat/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu" rel="stylesheet"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/js/mdb.min.js"></script> 
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
            font-size: 250%;
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
	<body id="page-top">
	
	<?php include('header.php'); ?>

		<section id="portfolio">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
					<br><br><br>
						<h2 id="categories_topic">By Categories</h2>
						<p id="categories_para">There are lots for you to explore.
							  <br> Hence for your ease we divided it into Categories based on your need.</p>
					</div>
				</div>
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="https://images.pexels.com/photos/6267/menu-restaurant-vintage-table.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Restaurants</h2>
								<p>Dine or take away</p>
								<a href="restaurants.php">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Hotels or Lodges</h2>
								<p>Stay for the night</p>
								<a href="hotelsandlodges.php">rw</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="https://images.pexels.com/photos/1061588/pexels-photo-1061588.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Educational Institutions</h2>
								<p>Decide your future</p>
								<a href="educational.php">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="https://images.pexels.com/photos/1000445/pexels-photo-1000445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Hangouts</h2>
								<p>Some of the hottest places to hangout with your friends</p>
								<a href="hangouts.php">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="https://images.pexels.com/photos/1727684/pexels-photo-1727684.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Shopping</h2>
								<p>Find the best places for your Shopping</p>
								<a href="shopping.php">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Health and Fitness</h2>
								<p>Get a note of hospitals,clinics and gyms nearby</p>
								<a href="heathandfitness.php">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
			</div>
		</section>

		
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="jscat/bootstrap.min.js"></script>
		<script src="jscat/SmoothScroll.js"></script>
		<script src="jscat/theme-scripts.js"></script>

		<?php include('footer.php'); ?>

	</body>
</html>