<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>Detail Crowd</h1>
  <br><br>
  <div class="row">
    <div class="col-sm-3" ></div>
    <div class="col-sm-3" >
      <img src="<?php echo base_url($details[0]->foto); ?>" width="304" height="236"> 
      <center><p><?php echo $details[0]->judul; ?></p></center>
      <center><p><?php echo $details[0]->username; ?></p></center>
    </div>

    <div class="col-sm-3" ">
      <h2>DESKRIPSI</h2>
      <p><?php echo $details[0]->deskripsi; ?> </p>
      <br><br>

    </div>
    <div class="col-sm-3" ">
      <label class="control-label col-sm-6" for="pwd">Urgensi</label>
      <div class="col-sm-6">
       <label class="control-label col-sm-6" for="pwd"><?php echo $details[0]->urgensi; ?></label>
      </div>
      <br><br><br>
      <label class="control-label col-sm-6" for="pwd">Dana Dibutuhkan</label>
      <div class="col-sm-6">
       <label class="control-label col-sm-6" for="epwd"><?php echo $details[0]->dana; ?></label>
      </div>
      <br><br><br>
      <label class="control-label col-sm-6" for="pwd">Dana Terkumpul</label>
      <div class="col-sm-6">
       <label class="control-label col-sm-6" for="epwd"><?php echo $details[0]->dana_kumpul; ?></label>
      </div>
      <br><br><br>

        <button type="button" class="btn btn-primary btn-md">Donasi</button>
     
    </div>
    </div>
  </div>

</body>
</html>
