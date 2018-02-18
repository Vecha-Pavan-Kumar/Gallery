<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IEEE GCET-SB</title>
  <meta charset="UTF-8">
  <meta name="Author" content="">
  <meta name="Keywords" content="IEEE WEBSITE GCTC hyderabad,ieee home page gctc,ieee about us page gctc,ieee about IEEE-GCETSB page gctc,ieee IEEE-GCETSB WIE page gctc,ieee gallery page gctc,ieee reports page gctc,ieee join us page gctc,ieee contact us page,gctc,ieee website">
  <meta name="Description" content="">
  <meta http-equiv="refresh" content="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="img/favicon.ico">
 <!-- <link rel="stylesheet" href="../responsiveslides.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/responsiveslides.min.js"></script>
  
 <style>
    body {
      padding-top: 0px;
      padding-left: 20px;
      /*font-family: "Lato", sans-serif; */
    }
    .main {
    margin-left: 0px; /* Same as the width of the sidenav */
    font-size: 22px; /* Increased text to enable scrolling */
    padding: 0px 0px;
    }
    .navbar {
    background-color: greenyellow;
    background:orangered;
    border-color: transparent;
  }

  .navbar li a {
    color: white;
  }
.navbar li a:hover{
  background-color:green;
}
  .icon-bar {

    background-color: #000;
  }

  .dropdown:hover .dropdown-menu {
    display: block;
    background-color:grey;
  }
  .dropdown ul li a content:hover{
    background-color:skyblue;
  }
  p{
      text-align:justify;
  }

  </style>
  <script>
  // Slideshow 
  $(function () {
      $("#slider4").responsiveSlides({
       auto: true,
        pager: false,
        nav: true,
        maxwidth: 2000,
        speed: 800,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>

</head>

<body>

        <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                      aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color:white">IEEE-GCETSB</a>
                  </div>
            
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="active">
                        <a href="#">Home </a>
                      </li>
            
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="./about.php">ABOUT IEEE</a>
                          </li>
                          <li>
                            <a href="./about.php#IEEE GCET SB EXECOM">IEEE EXECOM</a>
                          </li>
            
                        </ul>
                      </li> 
            
                      <li>
                        <a href="./IEEE-GCETSB.php#IEEE-GCETSB1">ABOUT IEEE-GCETSB</a>
                      </li>
                      <li>
                        <a href="./IEEE-GCETSB WIE.php">IEEE-GCETSB WIE</a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALLERY
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="./ImageGallery.php">IMAGES</a>
                          </li>
                          <li>
                            <a href="./VideoGallery.php">Videos</a>
                          </li>
            
                        </ul>
                        <li>
                            <a href="./Reports.php">REPORTS</a>
                          </li>

                      <li>
                        <a href="./JoinUs.php" >JOIN US</a>
                      </li>
                      <li>
                        <a href="./ContactUs.php">CONTACT US</a>
                      </li>
                  </div>
                  <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            
              </nav>
    <br><br>
                
    <div class="container">
    <!--<h2>Carousel Example</h2>-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
  
        <div class="item active">
          <img src="Index/1.jpg" alt="GEETHANJALI IEEE LOGO" style="width:100%" "height=50opx">
          <div class="carousel-caption">
            <h3>IEEE LOGO</h3>
          <!--  <p>LA is always so much fun!</p> -->
          </div>
        </div>
  
        <div class="item">
          <img src="Index/2.jpg" alt="GEETHANJALI COLLEGE BUILDING" style="width:100%" "height=500px">
          <div class="carousel-caption">
            <h3>Geethanjali</h3>
         <!--   <p style="padding-left:60px ">Thank you, Chicago!</p> -->
          </div>
        </div>
      
        <div class="item">
          <img src="Index/3.png" alt="IEEE" style="width:100%" "height=500px">
          <div class="carousel-caption">
            <h3>IEEE</h3>
        <!--    <p>We love the Big Apple!</p>  -->
          </div>
        </div>
    
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" ></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br><br>


<div>
  <div class="container-fluid">

    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="main"><br>
        <h1>WELCOME TO IEEE GCET STUDENT BRANCH</h1>
        <p>We’re a group of Engineering Students (undergrads and graduates) who want to have fun and meet new people, to learn
          about research and innovation in technology, to find ourselves and our passions, to help our community, and to
          get inspired to change the world!</p>
        <br>
        <strong>Coming together is a beginning.</strong><br><br>
        <strong>Keeping together is progress.</strong><br><br>
        <strong>Working together is success.</strong><br><br>
        <strong>Science is not just a subject. For us, it’s a way of life.</strong><br><br>
        <img src="https://goo.gl/1pM6cv" alt="notjustieee" srcset="" class="img-responsive center-block" width="700px" height="500"><br>
        <p>
          The IEEE – GCET student branch was inaugurated in 2010 with a membership no of 100 students, 10 faculty advisors and a branch
          Counsellor and The branch has been assigned a Branch code STB- 05841 and COLLEGE code -60050138 WIE AG Geo-code:SB05841
          The Student Branch emphasis on conducting more activities and technical events which can develop the skills of
          a student in both technical and managerial.</p>
          <br>
          <p> We believe that in the ever evolving world of today, networking is
          the key for knowledge advancement. So, with the international fraternity provided to us by the IEEE this is the
          perfect way to milk information from the experts themselves and be a part of something that is bigger than ourselves.

        </p>
        <img src="./images/image003.jpg" alt="myieee" srcset="" class="img-responsive center-block">

    </div>

      </div>


    </div>

  </div>
</div>
</body>

</html>

