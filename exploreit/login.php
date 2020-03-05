<!DOCTYPE html>
<?php
ob_start();
?>
<html>
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
    
        
	<title>Login Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

#div1{
background-image: url('https://images.unsplash.com/photo-1542841366-9a30e19bb19a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9');
background-repeat:no-repeat;
background-size:cover;
background-position: center;
/* width:100%; */
height:100vh;
overflow:auto;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: 170px;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5);
}


.card-header h3{
color: white;
}


.input-group-prepend span{
width: 50px;
background-color: rgb(68, 212, 123);
color: black;
border:0;
}

input:focus{
outline: 0 0 0 0  ;
box-shadow: 0 0 0 0 ;

}

.remember{
color: white;
}
.navbar{
            background-color: rgb(68, 212, 123);;
        }
.top-nav-collapse {
            background-color: rgb(68, 212, 123);
       }
.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}
#explorebrand{
            font-family: 'Permanent Marker', cursive;
            font-size: 160%;
        }

.login_btn{
color: black;
font-family: 'Numans', sans-serif;
background-color: rgb(68, 212, 123);
border-radius: 5px;
}

.login_btn:hover{
color: black;
background-color: white;
transition-duration: 1s;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
.line{
  background: transparent;
  border: none;
  border-bottom: 1px solid #000000;
  box-shadow: none;
  border-radius: 5px;
  color: rgb(68, 212, 123);
}
#buttondrop{
    background-color: rgb(68, 212, 123);
    border: none;
    box-shadow: none;
}
.cardheight{
  height: 60%;
}
@media screen and (max-width: 500px){
  .links{
    font-size: 86%;
  }

}
</style>
<body class="h-100">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                <div class="container">
                  <a class="navbar-brand" href="index.php" id="explorebrand">Explore.it</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link ml-5 mt-2" href="index.php">HOME</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link ml-5 mt-2" href="#">FEATURES</a>
                      </li> -->
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
    <div>
<div class="container-fluid " id="div1">
	<div class="d-flex justify-content-center h-100">
		<div class="card cardheight">
			<div class="card-header">
				<h3>Sign In</h3>  
			</div>
			<div class="card-body">
				<form method="POST" action="login.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control line" name="username" placeholder="username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control line" placeholder="password" required>
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div class="form-group">
						<button type="submit" value="login" name="login" class="btn float-right login_btn">Login</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>
		
			</div>
		</div>
  </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>

<?php

//connecting to a database

$configconn = mysqli_connect('localhost','1154882','webdesignpackage','1154882');  //connects to the database
//checking connection

if(!$configconn){
echo 'Connection Error :' . mysqli_connect_error();
}

if(isset($_POST['login']))
{
    $dbuser='';
    $dbpass='';
    $username=$_POST['username'];
    $pass=md5($_POST['password']);
    $query = "select username,password from reg where username='$username' AND password='$pass'";
    $result = mysqli_query($configconn,$query);
      while($row=mysqli_fetch_assoc($result))
      {
          $dbuser=$row['username'];
          $dbpass=$row['password'];
      }
      if($username == $dbuser && $pass == $dbpass)
      {
        header('Location:categories.php');
        ob_end_flush();
      }
      else
      {
        echo "<script type='text/javascript'>alert(\"Invalid Username or Password\");</script>";
      }
}
?>