<?php
//save images to the local_images folder
if(isset ($_POST['name'])  &&  !empty($_POST['url'])){
      $postImageName = ($_POST['name']) ;
      $postImageUrl = ($_POST['url']) ;
      $postImageExt = ($_POST['ext']) ;

      $postImageName = str_replace (" ","",$postImageName) ;
      @$rawImage = file_get_contents ($postImageUrl) ;
      if($rawImage)
      {
              file_put_contents("local_images/".$postImageName.$postImageExt,$rawImage) ;
              echo "&nbsp;&nbsp;Image Saved!";
	}
		else{
      echo "&nbsp;&nbsp;This is not a valid URL image";
	}
}

if(isset($_POST['display'])){
  $image1 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_small/public/Henry%20VIII.jpg';
  $image2 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_small/public/QH-weddings-tile900.jpg';
  $image3 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x3/public/Astronomy%20cafe.jpg';
  $image4 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x3/public/ROG-Day_0.jpg';
  $image5 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_large/public/L6327-038_1224x420.jpg';
  $image6 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x2/public/_38A5159_CS_tile.jpg';
  $image7 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x3/public/Shop-banner.jpg';
  $image8 = 'http://www.rmg.co.uk/sites/default/files/styles/tile_small/public/larrge-23.jpg';
  $image9 = 'http://www.rmg.co.uk/sites/default/files/styles/featured_x2/public/test.jpg';
  //insert strings inside an array
  $images = array($image1, $image2, $image3, $image4, $image5, $image6, $image7, $image8, $image9);
  echo '<pre>'; print_r($images); echo '</pre>';
}
?>