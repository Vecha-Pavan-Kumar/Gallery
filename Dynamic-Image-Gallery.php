<?php
    $my_images_arr=scandir("Images");
  //  print_r($my_images_arr);
    $img_string="";
    foreach($my_images_arr as $img_name){
        if(strlen($img_name)>2){
        $img_string.='<img src="Images/'.$img_name.'">';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Image Gallery</title>
    <style type="text/css">
    div#gHolder{
        width: 1000px;
        height: 600px;
        margin: 0 auto;
        background-color: silver;
        padding: 10px;
    }
    div#theBigImageHolder{
        width: 1000px;
        height: 480px;
        background-color: white;
    }
    div#thumbnailsHolder{
        width: 990px;
        height: 100px;
        background-color: white;
        margin: 5px auto;
        padding: 5px;
        overflow: auto;
    }
    div#theBigImageHolder > img{
        width: 1000px;
        height: 480px;
    }
    div#thumbnailsHolder > img{
        height: 100px;
        width: 90px;
        display: block;
        float:left;
        margin:2px;
        transition: border-radius 0.3s linear 0s;
      /*  border:3px solid ;
        border-color:brown; */
    }
    div#thumbnailsHolder > img:hover{
    border-radius:100px;
    cursor: pointer;
    }
 </style>
 <script type="text/javascript">
 function imgFunc(){
     var bigImage=document.getElementById("bigImage");
     var thumbnailsHolder=document.getElementById("thumbnailsHolder");
     thumbnailsHolder.addEventListener("click",function(event){
         if(event.target.tagName=="IMG"){
            bigImage.src=event.target.src;
         }
     },false)
 }
 window.addEventListener("load",imgFunc,false);
 </script>


 </head>
 <body>
     <div id="gHolder">
        <div id="theBigImageHolder">
            <?php 
                echo '<img src="Images/'.$my_images_arr[2].'" id="bigImage">';
            ?>

            
          <!--   <img src="Images/01.jpg"> -->
         <div id="thumbnailsHolder">
            <?php
                echo $img_string;

?> 
         </div>
       </div>
 </body>

</html>
