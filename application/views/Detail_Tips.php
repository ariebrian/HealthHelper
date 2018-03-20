<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/detail.css">     
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">

<!-- jQuery library -->

<!-- Latest compiled JavaScript -->
<script src="<?php echo base_url();?>css/bootstrap.min.js"></script> 

    <title></title>
  </head>

  <body>
  	<section class="container">
  <div class="item-1">
<h><?php echo $details[0]->judul; ?></h>
<br><br>
</div>

<div class="item-2">
<center>
<div class="picture" >
	<!--<img src="<?php echo base_url(); ?> images/pict1.png" style="align-content: justify; height: 100px; width: 100px;"> 
-->
</div>
</center>
<center><p><?php echo $details[0]->deskripsi; ?></p></center>
</div>

</section>

  </body>
  </html>