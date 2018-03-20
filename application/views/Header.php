<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css">
<!-- jQuery library -->
<!--<script src="<?php echo base_url();?>css/jquery.min.js"></script>
-->
<!-- Latest compiled JavaScript -->
<script src="<?php echo base_url();?>css/bootstrap.min.js"></script> 

    <title></title>
  </head>
  <body>
  <h style="font-size: 60px;"> Nama Web</h>
  <!--Header-->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav" >
      <li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/tips">Healthy Tips</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/campaign">Crowd Funding</a></li>
    </ul>
    <?php if ($this->session->userdata('username') == NULL) {   ?>  
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url(); ?>index.php/sign-in"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
    </ul>
    <?php  }else{ ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><?php echo $this->session->userdata('username'); ?></a></li>
    </ul>
    <?php } ?>
  </div>
	</nav> 
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>