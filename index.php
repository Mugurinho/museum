<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Images</title>
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
<br>
<h2>&nbsp;Online gallery</h2>
<p>&nbsp;&nbsp;This gallery is based on online URL images that are automatically saved to and displayed from the images folder via a php script.
If the online URL images become unavailable, a default picture with a message is displayed to the user.</p>
<?php include 'index_script.php';?>

</body>
</html>