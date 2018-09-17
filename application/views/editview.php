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
<?php
include "menu.php";
?>
<br><br><br>
<div class="container">
 
  <?php
  //echo anchor("welcome/show","showdata");
  echo form_open('welcome/editt2',$rs);
  ?>
<form class="form-horizontal" action="insert.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">name:</label>
    <div class="col-sm-10">
    <input type="hidden" name="id" value="<?php echo $rs['id']?>">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $rs['name']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">date:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="date" placeholder="Enter password" name="date" value="<?php echo $rs['date']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">time:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="time" placeholder="Enter password" name="time" value="<?php echo $rs['time']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">tel:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="tel" placeholder="Enter password" name="tel" value="<?php echo $rs['tel']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="status">Status:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="status" placeholder="Enter status" name="status" value="<?php echo $rs['status']?>"><br>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" name="btnsave" value="บันทึก">
    </div>
  
<?php
echo form_close();
?>
</div>
</form>