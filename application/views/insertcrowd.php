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

<div class="container">
  <h2>INFORMASI CAMPAIGN</h2>
  <br><br>
  <?php echo form_open_multipart('Crowd_Controller/insert_case'); ?>
  <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Judul Bantuan</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="Judul" value="<?php echo set_value('Judul'); ?>" >
        <?php echo form_error('Judul'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Target Donasi</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" name="Target" value="<?php echo set_value('Target'); ?>">
      <?php echo form_error('Target'); ?>  
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Urgensi (1-5)
      </label>
      <div class="col-sm-8">
        <input type="number" class="form-control" name="Urgensi" min="1" max="5" value="<?php echo set_value('Urgensi'); ?>">
        <?php echo form_error('Urgensi'); ?>     
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Deadline Campaign</label>
      <div class="col-sm-8">
        <input type="date" class="form-control" name="Deadline" value="<?php echo set_value('Deadline'); ?>">
        <?php echo form_error('Deadline'); ?>  
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Cover Image</label>
      <div class="col-sm-8">
        <input type="file" name="images" class="form-control" accept=".jpg,.png" id="images" value="<?php echo set_value('images'); ?>">        
      </div>
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Deskripsi</label>
      <div class="col-sm-8"> 
        <textarea class="form-control" rows="10" name="Deskripsi" value="<?php echo set_value('Deskripsi'); ?>"></textarea>         
        <?php echo form_error('Deskripsi'); ?>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-8">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
  <?php echo form_close(); ?>
</div>

</body>
</html>