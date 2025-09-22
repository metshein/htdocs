<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>



<?php
$files = glob("img/*.*");
// var_dump($files);
for ($i=0; $i<count($files); $i++)
{
    
	$num = $files[$i];
	echo '<a href="'.$num.'" target="blank"><img src="'.$num.'" alt="random image" height="100"></a>'."&nbsp;&nbsp;";
	}
?>
</body>
</html>