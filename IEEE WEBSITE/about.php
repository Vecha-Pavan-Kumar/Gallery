<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<style>
/*html {
  background: #222 url("images/bg.png") repeat;
}*/

body {
  _width: 70%;
  color: black;
  font: 14px/20px Helvetica, Arial, sans-serif;
  margin: 20px auto 0;
  max-width: 1200px;
  max-height: 0px;
  text-align: center;
 /* text-shadow: 0 -2px 1px #000; */
  -webkit-font-smoothing: antialiased;
  }

h1 {
  font: 40px/60px "Helvetica Neue", Helvetica, Arial, sans-serif;
 /* color: #fff; */
 color:black;
  font-weight: 200;
  }
h2 {
  font: 16px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin-bottom: 40px;
  } 

p{
    text-align:justify;
    
    }
 p a{
   /*  color: */
 }
.main {
    margin-left: 0px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 0px;
}
.main ul li{
    text-align: justify
} 
@media only screen and (max-width: 500px) {
    p{
        text-align: left;
        font: 18px "Helvetica Neue", Helvetica, Arial, sans-serif;
      }
    ul li{
        text-align: left;
        font: 18px "Helvetica Neue", Helvetica, Arial, sans-serif;
   
    }
}

 </style>
<center><img src="about/IEEE.png"></center>
<div><p><?php include('about.txt'); ?></p></div>
</html>