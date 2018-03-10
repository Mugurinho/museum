<!DOCTYPE html>
<html lang="en">
<head>
  <title>Save Images</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="images.js"></script>
 </head>
 <body>
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="folder.php">Online/Local gallery</a></li>
    <li><a href="save.php">Save image</a></li>
  </ul>

	<h2>&nbsp;Save images to local directory</h2>
  <?php include 'save_script.php';?>
  <br>
  <div class="container">
  <form class="form-horizontal" action="save.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2">Image name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter image name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Image URL:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="url" placeholder="Enter image url" name="url">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Image type:</label>
      <div class="col-sm-2">          
       <select name="ext" class="form-control">
          <option>.jpg</option>
          <option>.png</option>
          <option>.gif</option>
      </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit" class="btn btn-default" value="Save Image">
      <input type="submit" name="display" class="btn btn-default" value="View array">
      </div>
    </div>
  </form>
</div>
</body>
</html>