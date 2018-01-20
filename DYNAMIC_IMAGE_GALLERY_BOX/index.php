<html>
<head>
<title>Image Gallery Dynamic</title>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="jquery.fancybox.min.css">

<!--<scrpt src="jquery.fancybox.min.css"></script>-->

<style>
body{
    margin:0;
    padding:0;
    background:#ccc;
}
main{
    width:80%;
    margin:0px auto ;
}
.thumbnails{
    width:30%;
    height:30%;
    float:left;
    margin:10px;
    background:#fff;
    padding:20px;
    box-sizing:border-box;
    overflow:auto;
}
.thumbnails img{
    width:100%; /*thumbnails 30% =img 100% */
  /*  height:auto; */
  height:100%;
}
.thumbnails img:hover{
    border:3px solid;
    border-color:brown;
}
</style>
</head>
<body>
<main>
<?php
$dir= glob('Images/{*.jpg,*.png}',GLOB_BRACE);
foreach($dir as $value){
?>
<div class="thumbnails">
<a href="<?php echo $value;?>" data-fancybox="images" data-caption="<?php echo $value;?>">
<img src="<?php echo $value;?>"  alt="<?php echo $value;?>">
</a>
<!--<h2>Title Of Image</h2>-->
</div>
<?php

}
?>
</main>

</body>
</html>
