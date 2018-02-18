<title> Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
/*@font-ftruncate
{
    src:url(asserts/font.otf);
    font-family:myfont;
}
#uni
{
position:absolute;
width:100%;
min-height:100%;
left:0px;
top:0px;
font-family:myfont;
}
#header{
    width:94%;
    padding:3%;
    font-size:60px;
    color:white;
    background:url(asserts/by.png);
}
#menu-bar{
    width:100%;
    background:url(asserts/bb.png);

}
#menu-bar a{
    font-size:24px;
    color:white;
    padding:10px 20px 10px 20px;
    text-decoration:none;
    display:inline-block;
    }
#menu-bar a:hover{
    color:#727272;
    background:white;
}
#content{
        width:96%;
        padding:2%;
        font-size:20px;
        background:url(asserts/cb.png);
        height:500px;
}*/
</style>
<?php
    include('Home.php');
?>
<div id="content">
 
 <?php
      $p = $_GET['page'];

     $page = $p.".php";

     if(file_exists($page))
         include($page);
     elseif($p=="")
         echo "This is Home Page";
     else
         echo "what are you looking for! ?";

 ?>
</div>
</div>
</div>
</nav>

