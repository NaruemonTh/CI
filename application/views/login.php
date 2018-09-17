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
<?php 
include "menu.php";
?>
<body>
<br><br>
<div class="container">
  <h2>เข้าสู่ระบบ</h2>
  <form method="POST" action="<?php echo base_url(); ?>welcome/login">
    <div class="form-group">
      <label for="user">user:</label>
      <input type="user" class="form-control" id="user" placeholder="Enter user" name="user">
    </div>
    <div class="form-group">
      <label for="pass">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div>
    
    <button type="submit" class="btn btn-success" <?php echo anchor("welcome/login","Login"); ?></button>
    <button type="submit" class="btn btn-danger">Canceled</button>
  </form>
</div>

</body>
</html>
