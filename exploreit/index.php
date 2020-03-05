<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('essentials.php') ?>
    <title>Home</title>
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
    <div>        <div>
        <div class="jumbotron jumbotron-fluid" id="mainaim">
                <br>    
                <br><br>
                <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="main-aim-heading">Explore.it</h1>
                      <p class="main-aim-para font-weight-500">
                          <br><br>
                            Explore your place like never before..<br> with new features in a more fun and easy way.
                      </p>
                    </div>
                    <div class="col-md-6">
                        <a href="login.php" class="btn aqua-gradient btn-lg  mr-3" id="registerbuttons1">
                         Login </a>
                        <a href="register.php" class="btn aqua-gradient btn-lg mr-3 text-white" id="registerbuttons">Sign up</a>         
                    </div>
                    </div>
                </div>
        </div>
               <div class="row w-100">
                        <div class="col-sm-6">
                                <div class="container ml-3 " id="imagnew">
                                  </div>
                      </div>
                    <div class="col-sm-6">
                            <div class="container pr-4">    
                                    <h4 class="display-4 pt-5 text-sm-center" id="newheading">
                                        New to a place?
                                    </h4>
                                    <p id="newpara" class="lead text-sm-center">
                                        <br><br>
                                        Having a really hard time to find places nearby for your needs ?<br>
                                        Don't worry we got it all covered......
                                    </p>
                              </div>
                    </div>
                </div>
        </div> 
                <br><br>
                    <div class="row w-100" id="find">
                        <div class="col-sm-6">
                                <div class="container">
                                        <h3 id="findheading" class="display-4 pt-5 text-sm-center">
                                             Find it with an ease....   
                                        </h3>
                                        <p id="findpara" class="text-sm-center">
                                            <br><br>
                                            No more of finding a needle in a haystack.. <br>
                                            Find all variety of shops,famous spots,etc <br>
                                            with just one click of a button.
                                        </p>
                                  </div> 
                        </div>
                        <div class="col-sm-6">
                                <div class="container ml-3" id="imagfind">
                                    </div>
                        </div>
                    </div>
                    <br><br><br>
                   <div class="row w-100">
                        <div class="col-sm-4">
                                <img src="data:image/jpeg;base64,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" alt="whatsnew" class="img-fluid h-25 mx-auto" id="filterimag">
                                <br><br>
                                <p class="text-sm-center lead pl-5" id="filterpara">
                                    Is there a famous shop coming soon nearby? or a live event is gonna happen in your place soon? Get all your updates here of what's new!!!
                                </p>
                            </div>
                            <div class="col-sm-4">
                                    <img src="data:image/png;base64,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" alt="filter" class="h-25 img-center" id="filterimag">
                                    <br><br>
                                    <p class="text-sm-center lead pl-5" id="filterpara">
                                        Get the best filtered results<br> according to your wishes and needs<br> from a small to the most famous shops around you!!
                                    </p>    
                                </div>
                            <div class="col-sm-4">
                                <img src="data:image/jpeg;base64,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" alt="connected" class="img-fluid h-25 mx-auto" id="filterimag">
                                <br><br>
                                <p class="text-sm-center lead pl-5" id="filterpara">
                                    Stay connected by meeting people who are new or with people who know their way around a place you're in!
                                </p>
                            </div>
                   </div>
            <?php include('footer.php'); ?>
</body>
</html>