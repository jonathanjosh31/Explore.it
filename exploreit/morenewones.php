

<?php

//connecting to sa database

$configconn = mysqli_connect('localhost','1154882','webdesignpackage','1154882');  //connects to the database

//checking connection

if(!$configconn){
echo 'Connection Error :' . mysqli_connect_error();
}


//check request id parameter

if(isset($_GET['restaurant_name'])){
    $hotelname = mysqli_real_escape_string($configconn, $_GET['restaurant_name']);
    
    $sql = "SELECT * FROM newones";

    $result = mysqli_query($configconn , $sql);
    $the_hotel = array('restaurant_name' => '' ,'description' => '' , 'address' => '','imglink' =>'' , 'created_at' => '');
    $hotel = mysqli_fetch_all($result,MYSQLI_ASSOC); 
    for($i=0;$i<count($hotel);$i++)
    {
        if($hotel[$i]['restaurant_name']==$hotelname)
        {
            $the_hotel['restaurant_name']=$hotel[$i]['restaurant_name'];
            $the_hotel['description']=$hotel[$i]['description'];
            $the_hotel['address']=$hotel[$i]['address'];
            $the_hotel['imglink']=$hotel[$i]['imglink'];
            $the_hotel['created_at']=$hotel[$i]['created_at'];
            break;
        }
    }
    
    
    
    
    mysqli_free_result($result);

    mysqli_close($configconn);

}













?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('essentials.php') ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
<link rel="stylesheet" href="morecss/css/font-awesome.min.css">               
<link rel="stylesheet" href="morecss/bootstrap.min.css">                                     
<link rel="stylesheet" href="morecss/tooplate-style.css">                                   
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

    <div class="container-fluid">            
        <!-- Section 2 -->
        <section class="tm-section tm-section-about" id="about" style="background-image:url('<?php  echo $the_hotel['imglink']; ?>')">

            <div class="tm-page-content-width">
                <div class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
                    <div class="tm-content-box-inner">
                        <h2 class="tm-section-title"><?php  echo $the_hotel['restaurant_name']; ?></h2>
                        <p><?php  echo $the_hotel['address']; ?></p>
                        <br>
                        <p><?php  echo $the_hotel['description']; ?></p>   
                        <br>
                        <p>Card created at:<?php  echo $the_hotel['created_at']; ?></p>
                    </div>                        
                </div>                    
            </div>
            
        </section>
         <script src="morejs/jquery-1.11.3.min.js"></script>         
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> 
    <script src="morejs/bootstrap.min.js"></script>             
    <script src="morejs/jquery.singlePageNav.min.js"></script>  
    
    <script>     
      
        
        function checkScrollPosition() {
            
            if($(window).width() < 767) {
                $(".tm-nav").removeClass("scroll");
                return;
            }

            if($(window).scrollTop() > 50) {
              $(".tm-nav").addClass("scroll");
          } else {        
              $(".tm-nav").removeClass("scroll");
          }
        }

        $(document).ready(function () {   
            // Single page nav
            $('.tm-nav').singlePageNav({
                offset: 57,
                filter: ':not(.external)',
                updateHash: true        
            });

            checkScrollPosition();

            // navbar
            $('.navbar-toggle').click(function(){
                $('.main-menu').toggleClass('show');
            });

            $('.main-menu a').click(function(){
                $('.main-menu').removeClass('show');
            });
        });

        $(window).on("scroll", function() {
            checkScrollPosition();    
        });

        $('#tmNavbar a').click(function(){
            $('#tmNavbar').collapse('hide');
        });

    </script>             
 <?php include('footer.php'); ?>
</body>
</html>