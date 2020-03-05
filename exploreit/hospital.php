<?php

//connecting to sa database

$configconn = mysqli_connect('localhost','1154882','webdesignpackage','1154882');  //connects to the database
//checking connection

if(!$configconn){
    echo 'Connection Error :' . mysqli_connect_error();
}

//query for all hotels
$sql = 'SELECT center_name,address,imglink,created_at FROM hospital ORDER BY created_at';

//making query and getting results

$result = mysqli_query($configconn, $sql);
  
//fetch the rows as array

$centers = mysqli_fetch_all($result,MYSQLI_ASSOC);  

//free result from memory
mysqli_free_result($result);

//close connection to database

mysqli_close($configconn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('essentials.php') ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Hospitals</title>

    <link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans" rel="stylesheet">
    <link href="csssub/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="csssub/normalize.css">
    <link rel="stylesheet" href="csssub/component.css">
    <link rel="stylesheet" href="csssub/custom-styles.css">
    <link rel="stylesheet" href="csssub/font-awesome.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

     
	 <link rel="stylesheet" href="csssub/demo.css">
    <link rel="stylesheet" href="csssub/font-awesome-ie7.css">

      <script src="jssub/jquery.mobilemenu.js"></script>
      <script src="jssub/html5shiv.js"></script>
      <script src="jssub/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
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
    </div>
        <div class="container-fluid" style="background-image:url('https://images.unsplash.com/photo-1538108149393-fbbd81895907?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');text-align: center; background-size: cover; position: relative;background-position: center;color: black; ">
          <Br><br><br><br><br><br>    
          <h1 style="font-family: 'Open Sans', sans-serif;font-family: 'Arvo', serif; font-size: 50px">Health and Fitness</h1>
              <h3 style="font-family: 'Open Sans', sans-serif;">Hospitals</h3>
             <br><br><br><br><br><br>
             <br><br><br> 
        </div>
    <div class="container">
      <div class="featured-block">
        <div class="row">
        <?php foreach($centers as $center): ?>
          <div class="col-md-4">
            <div class="block">
            <div class="thumbnail">
              <img src="<?php echo htmlspecialchars($center['imglink']) ?>" alt="" class="img-responsive">
              <div class="caption">
              <h1><?php echo htmlspecialchars($center['center_name']); ?></h1>
                            <p><?php echo htmlspecialchars($center['address']); ?></p>
                            <a class="btn" href="morehospital.php?center_name=<?php echo $center['center_name'];?>">more</a>

              </div>
              </div>
            </div>
            </div>
            <?php endforeach; ?>
          </div>
          </div>

        </div> 
        <a class="btn" style="margin-left:160px;margin-right:auto;" href="addhospital.php">Add new Content</a>

    <script src="jssub/jquery-1.9.1.js"></script>
    <script src="jssub/bootstrap.js"></script>
    <script src="jssub/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    <?php include('footer.php'); ?>
  </body>
</html>
