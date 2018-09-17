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
  <h2>Horizontal form</h2>

  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="time">time:</label>
      <div class="col-sm-10">          
        <input type="time" class="form-control" id="time" placeholder="Enter time" name="time">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tel">tel:</label>
      <div class="col-sm-10">          
        <input type="tel" class="form-control" id="tel" placeholder="Enter tel" name="tel">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">status:</label>
      <div class="col-sm-10">          
        <input type="status" class="form-control" id="status" placeholder="Enter status" name="status">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
