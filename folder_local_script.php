<?php
//displays images from the folder local images folder
if(isset($_POST['submit'])){
$dirname = "local_images/";
$images = glob($dirname."*.{jpg,gif,png}",GLOB_BRACE);

foreach($images as $value) {
    echo "<div class='responsive'>
					<div class='gallery'>
					        <img src='$value' style='width:100%'>
					    </div>
				</div>";
}
}
?>