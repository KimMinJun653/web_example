<?php
$uploaddir = './uploads/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$uploadfile)) {
	echo "Valid File, File uploaded successfully. \n";
	} else {
		print " Possible file upload attack!. \n";
	}
	
	
	print "Debugging information:\n";
	print_r($_FILES);
	
	print "</pre>";
	?>
 #출처 WEB HACKING 서버 침투 기법(유현수 지음)
