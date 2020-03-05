<!DOCTYPE html>
<html lang="en">
<head>
<?php include('essentials.php') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Archivo+Black|Fredoka+One|Passion+One|Patua+One|Permanent+Marker|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Link for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
    <!-- Link for icons -->
    <!-- CDNs for Md Bootstrap -->
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
   <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
<!-- CDNs for Md Bootstrap -->
    <title>Contact us</title>
</head>
<style>
    #locationicon{
        padding-left:45%;
    }
    #locationicon1{
        padding-left:38%;
    }
    #contact-box{
        box-shadow: 2px 2px 8px gray;
        transition: 1s;
    }
    #contact-box:hover{
        box-shadow: 5px -5px 50px rgb(68, 212, 123);
    }
    .navbar{
        background-color: rgb(68, 212, 123);
    }
    #explorebrand{
            font-family: 'Permanent Marker', cursive;
            font-size: 160%;
        }
</style>
<body>
<?php include('header.php'); ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                    <div class="container">
                      <a class="navbar-brand" href="#" id="explorebrand">Explore.it</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link ml-5 mt-2" href="home.php">HOME</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link ml-5 mt-2" href="categories.php">EXPLORE</a>
                          </li>
                          <li class="nav-item ml-3">
                            <div class="dropdown">
                                <button class="btn btn-transparent dropdown-toggle" type="button" data-toggle="dropdown" id="buttondrop">About us</button>
                                <div class="dropdown-menu">
                                    <a href="motto.php" class="dropdown-item">Our motto</a>
                                    <a href="team.php" class="dropdown-item">Our team</a>
                                </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
              <br>
              <br>
    <section class="container border mt-5 mb-5" id="contact-box">
        <h2 class="h1-responsive font-weight-bold text-center my-4">
            Get in touch with us...
        </h2>
        <p class="text-center my-3 mx-auto w-responsive">
            Having any problems or queries?Feel free to discuss with us.Our Team is always available to help you.
        </p>
        <div class="container">
        <form action="" method="" name="contact-form" id="contact-form">
        <div class="row">
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" class="form-control w-75" name="myname" placeholder="Your name">
                </div>
            </div>
            <div class="col-md-6">
                    <div class="md-form mb-0">
                            <input type="text" class="form-control w-75" name="email" placeholder="Your Email">
                        </div>        
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                <input type="text" class="form-control w-75" name="subject" placeholder="Subject">
            </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <textarea name="message" id="message" class="form-control md-textarea" rows="3" placeholder="Any prob or query??"></textarea>
                </div>
            </div>
        </div>
        </form>
        </div>
        <br><br>
        <div class="row w-100">
            <div class="col-md-4">
                <img src="data:image/png;base64,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" alt="location" class="img-fluid h-25 mx-auto" id="locationicon1">
                <br>
                <br>
                <p class="text-center" id="address">Peelamedu,Coimbatore-641004,Tamilnadu</p>
            </div>
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa3WxacUK-f44MmfoM9Mn7SDToFqwlJGreM-2qMpp3I_c2myWy" alt="phone" class="img-fluid h-25 mx-auto" id="locationicon">
                <br>
                <br>
                <p class="text-center" id="address">+919489267558,+919489821191</p>
                
            </div>
            <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO12hiZ97jGx8WLgYAoaIgjghr9LY3MqFbK3QMufRuAPamfI9NMw" alt="mail" class="img-fluid h-25 mx-auto" id="locationicon">
                    <br>
                    <br>
                    <p class="text-center" id="address">explore.it2k19@gmail.com</p>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>