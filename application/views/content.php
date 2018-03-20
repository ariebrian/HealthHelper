<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/content.css">
	  <head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Volkrone">
  </head>
</head>
<body>

<section class="container">
  <div class="item-1" style="background-image: url(<?php echo base_url()."images/Tips.jpeg"?>);">
<center><h1 >Tips for Your Healthy</h1></center>
<center><a class="button1" href="<?php echo base_url(); ?>index.php/Tips_Controller/show_tips" style="text-decoration: none;"> Check It!</a></center>
</div>

  <div class="item-2">
 <center><h>Not Everyone Lucky</h></center>
 <br>
 <center><h>Let's Help Them!!</h></center>
  <center><a class="button2" href="<?php echo base_url(); ?>index.php/Crowd_Controller/get_some" style="text-decoration: none;">Click Here!!</a></center>
  </div>
</section>
	

</body>
</html>