<!DOCTYPE html>
<html lang="en">
<head>
<?php include('essentials.php') ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Archivo+Black|Fredoka+One|Passion+One|Patua+One|Permanent+Marker|Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Link for icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
<!-- Link for icons -->
<!-- CDNs for Md Bootstrap -->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/js/mdb.min.js"></script> 
<!-- CDNs for Md Bootstrap -->
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style>
    body{
        background-color: rgba(186, 235, 192, 0.63);
    }
.container1{
    border-style: solid;
    border-color: rgb(68, 212, 123);
    border-radius: 20px;
    margin-top: -175px;
    padding:5%;
    background-color: rgba(0,0,0,0.5);
    transition: 1s;
}
.container1:hover{
    box-shadow: 5px -5px 50px rgb(68, 212, 123);
}
.container1 .img{
    text-align:center;
    margin-top: -130px;   
}
.container1 .details{
    /* border-left:2px solid black; */
    height: 200px;
    margin-top: 0px;
    color: rgb(68, 212, 123);
}
.container1 .details p{
    margin-top: 60px;
    font-size:15px;
    font-weight:bold;
}
.container2{
    height: 300px;
    background-color: rgba(0,0,0,0.55);
    margin-top: 50px;
    border-style: solid;
    border-width: 5px;
    border-color: rgb(68, 212, 123);
    border-radius: 50px;
    text-align: center;
    transition: 1s;
}
.navbar {
    background-color: rgb(68, 212, 123);
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
.container2 h4{
    margin-left: 50px;
    color: rgb(68, 212, 123);
}
    </style>
</head>
<body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                <div class="container">
                  <a class="navbar-brand" href="home.php" id="explorebrand">Explore.it</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link ml-5 mt-2" href="home.php">HOME</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link ml-5 mt-2" href="categories.php">EXPLORE</a>
                      </li> -->
                      <li class="nav-item ml-3">
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle" type="button" data-toggle="dropdown" id="buttondrop">About us</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Our motto</a>
                                <a href="#" class="dropdown-item">Projects</a>
                            </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
<div>
    <img class="img-rounded img-fluid" src="https://images.unsplash.com/photo-1542841366-9a30e19bb19a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9" style="height: 600px; width: 100% ; background-position: center; background-size: cover;">
</div>
<div class="container container1" style="position:relative;">
    <div class="row">
        <div class="col-md-6 mb-3 img">
            <img src="http://www.personalbrandingblog.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"  style="height: 200px; border-radius: 100%;
            width: 200px;" alt="" class="img-rounded">
        </div>
        <div class="col-md-6 details text-center">
            Firstname : <h4 id="firstname"></h4>
            Lastname : <h4 id="lastname"></h4>    
        </div>
    </div>
</div>
<!-- <div class="container container2" style="position:relative;">
    <div class="row">
            <h4>Description : </h4>
    </div>
</div> -->
<?php include('footer.php'); ?>
</body>
</html>
<?php
$configconn = mysqli_connect('localhost','1154882','webdesignpackage','1154882');  //connects to the database
if(isset($_POST['login']))
    {
        $dbuser = '';
        $dbfname = '';
        $dblname = '';
        $dbemail = '';
        $query = "select username,firstname,lastname,email from user";
        $result = mysqli_query($con,$query);
          while($row=mysqli_fetch_assoc($result))
          {
              $dbuser=$row['username'];
              $dbfname=$row['firstname'];
              $dblname=$row['lastname'];
              $dbemail=$row['email'];
          }
?>