<?php
//avoids any errors display
error_reporting(0);
//store images as strings
$image1 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_small/public/Henry%20VIII.jpg';
$image2 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_small/public/QH-weddings-tile900.jpg';
$image3 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x3/public/Astronomy%20cafe.jpg';
$image4 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x3/public/ROG-Day_0.jpg';
$image5 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_large/public/L6327-038_1224x420.jpg';
$image6 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x2/public/_38A5159_CS_tile.jpg';
$image7 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x3/public/Shop-banner.jpg';
$image8 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_small/public/larrge-23.jpg';
$image9 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x2/public/test.jpg';
$image10 = 'http://media.gettyimages.com/photos/this-is-a-satellite-image-of-the-volcanic-activity-from-nishinoshima-picture-id461549277';
//insert strings inside an array
$images = array($image1, $image2, $image3, $image4, $image5, $image6, $image7, $image8, $image9, $image10);
//call functions/methods here
displayImages();
storeImages();

//display images function
function displayImages(){
	global $images;
	//run a for loop through array and display them in index.php
	foreach($images as $value){
		//get the image size to establish if online or not existent
		$imgSize = @getimagesize($value);
		global $status;
		if ($imgSize == 0){
			$status = "offline";
			//if missing image, display a friendly image to the user
			$miss = "<div class='responsive'>
					<div class='gallery'>
					        <img src='errorimage/miss8.jpg' style='width:100%'>
					          <div class='desc' id='off'>$status</div>
					    </div>
				</div>";
			echo $miss;
			/*echo  "<br>The file " . $value . " seems to be " . $status;*/
		} 
		else{
			$status = "online";
			//echo "<img src = '$value' title = '$status'/>";
			echo "<div class='responsive'>
					<div class='gallery'>
					        <img src='$value' style='width:100%'>
					          <div class='desc'>$status</div>
					    </div>
				</div>";
		}
	}
}


//store urls images to local folder function
function storeImages(){
	global $images;
	define('DIRECTORY', 'images/');

	for ($i=0; $i < 11; $i++) { 
		$img = file_get_contents($images[$i]);
		$imgSize = @getimagesize($images[$i]);
		global $stored;
		if ($imgSize == 0){
			//$stored = " has not been stored to the " . DIRECTORY . " folder!";
			//echo "<br>&nbsp;The file " . $images[$i] . " appears to be offline and" . $stored;
			} 
		else {
			file_put_contents(DIRECTORY . '/image' . $i. '.jpg', $img, FILE_APPEND);
		}
	}
}

/*echo "<br>&nbsp;The file " . $images[$i] . " appears to be offline and";
//monitor the number of files
echo "<br><br>&nbsp;Total files: " . count($images);
$count = count(glob("images/*.jpg"));
echo "<br>&nbsp;Stored files to folder: $count";
$failed = count($images) - $count;
echo "<br>&nbsp;Files not stored to folder: $failed";
$offline;
echo "<br>&nbsp;Offline files displayed: $offline";
//echo '<pre>'; print_r($images); echo '</pre>';*/
?>