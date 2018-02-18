<html>
<head>
<title>Reports</title>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
    margin-top:100;
    padding:0;
    background:#ccc;
}
main{
    width:80%;
    margin:0px auto;
}
</style>
</head>
<body>
<main>
<h3 style="text-align:center">2017 IEEE Reports</h3>
<?php
$dir = glob('2017/{*.pdf}',GLOB_BRACE);
foreach($dir as $value)
   {
      ?>
<a href="<?php echo $value;?>" target="_blank"><?php echo $value;?></a><br>
      <?php
   }
?>

<h3 style="text-align:center">2016 IEEE Reports</h3>
<?php
$dir = glob('2016/{*.pdf}',GLOB_BRACE);
foreach($dir as $value)
   {
      ?>
<a href="<?php echo $value;?>" target="_blank"><?php echo $value;?></a><br>
      <?php
   }
?>

</main>
</body>
</html>
