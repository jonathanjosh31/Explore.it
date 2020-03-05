<?php


$configconn = mysqli_connect('localhost','1154882','webdesignpackage','1154882');  //connects to the database
//checking connection

if(!$configconn){
    echo 'Connection Error :' . mysqli_connect_error();
}
$place_details=
['place_name' => '','address' => '','imglink' => '','description' => ''];

if(isset($_POST['submit'])){
	$place_details['place_name'] = $_POST['place_name'];
	$place_details['address'] = $_POST['address'];
	$place_details['imglink'] = $_POST['imglink'];
	$place_details['description'] = $_POST['description'];
	$place_name =mysqli_real_escape_string($configconn,$_POST['place_name']);
	$address =mysqli_real_escape_string($configconn,$_POST['address']);
	$imglink =mysqli_real_escape_string($configconn,$_POST['imglink']);
	$description =mysqli_real_escape_string($configconn,$_POST['description']);
	//create sql
	$sql = "INSERT INTO goodoldones(place_name,address,imglink,description) VALUES('$place_name','$address','$imglink','$description')";
	//save to db and check
	if(mysqli_query($configconn,$sql)){
		//success
		header('Location:goodoldones.php');
	}else{
		//error
echo "<script>alert('This Place Already exists');</script>";	}
}	
?>





<!DOCTYPE html>
<html lang="en">
<head>
<?php include('essentials.php') ?>
	<title>Add your Content</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
	<style>
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
            background-color: transparent;
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
	<div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
				<span class="contact100-form-title">
					Did we miss anything? Share with us what we missed..
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter place name">
					<input class="input100" type="text" name="place_name" placeholder="place Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter place address">
					<input class="input100" type="text" name="address" placeholder="Address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter an image link">
					<input class="input100" type="text" name="imglink" placeholder="Provide a image link for display">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your description about the place">
					<textarea class="input100" name="description" placeholder="Your Description"></textarea>
					<span class="focus-input100"></span>
				</div>
							<input class="input100" type="submit" style="color:white;background-color:purple;cursor:pointer;" name="submit" value="Add">
						</span>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor1/animsition/js/animsition.min.js"></script>
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor1/select2/select2.min.js"></script>
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
	<script src="vendor1/countdowntime/countdowntime.js"></script>
	<script src="js1/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
           <?php include('footer.php'); ?>
</body>
</html>
