<meta charset="UTF-8">
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
include "menu1.php";
//echo form_open('welcome/add');
?><br><br>
<div class="container">
<body>
<h2>รายชื่อลงเข้าใช้สระว่ายน้ำ</h2>

<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>date</th>
        <th>time</th>
        <th>tel</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
<?php


foreach ($rs as $r){
  
    ?>

    <tbody>
      <tr>
        <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['name'] ?></td>
        <td><?php echo $r['date'] ?></td>
        <td><?php echo $r['time'] ?></td>
        <td><?php echo $r['tel'] ?></td>
        <td><?php echo $r['status'] ?></td>
        <td><?php echo anchor("welcome/editt/".$r['id'],"editt"); ?> </td>
        <td><?php echo anchor("welcome/del/".$r['id'],"del",array("onclick"=>"javascript:return confirm('คุณมั่นใจนะ');")); ?></td>
      </tr>
    </tbody>

    <?php
    
} 
?>
</table>
<!--  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-primary" name="btnsave" value="เพิ่มข้อมูล">
    </div> -->
</div>