<!DOCTYPE html>
<html lang="en">
<head>
  <title>Local Images</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="images.js"></script>
 </head>
 <body>
 <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="folder.php">Online/Local gallery</a></li>
  <li><a href="save.php">Save image</a></li>
</ul>

<h2>&nbsp;Local gallery</h2>
<p>&nbsp;&nbsp;This is a local gallery of saved images to be displayed when internet connection is not available. This is a backup solution in case online images are unavailable due to various issues. The images are pulled from the local_images folder.</p>
<div class="container">
  <form class="form-horizontal" action="folder.php" method="POST">
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
      <input type="submit" name="submit" class="btn btn-default" value="View local gallery">
      </div>
    </div>
  </form>
</div>
<?php include 'folder_local_script.php';?>

<!--both of these sections don't play well when adding extra images and display them for the local images gallery-->
<!--Ideally, keep just one section and move the other in a different web page-->

<hr>
<h2>&nbsp;Online gallery</h2>
<p>&nbsp;&nbsp;This is an online gallery (URL images) that is displayed from the images folder via a php script. If the online images become unavailable, they won't be displayed in this section.</p>
  <?php include 'folder_script.php';?>


</body>
</html>