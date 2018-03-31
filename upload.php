<?php
if(isset($_POST['submit']))
{
	$file = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError  = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt= explode('.', $fileName)
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg','jpeg','png','pdf');
	if (in_array($fileActualExt, $allowed)) {
		# code...
		if ($fileError===0) {
			# code...
			if ($fileSize<10000000) {
				# code...
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDest = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDest); 
				header("Location:index.php?uploadsuccess");
			}else{
				echo "Your File is too big!!";
			}
		}else{
			echo "string";
		}
	}else{
		echo"You are not allowed of this type!";
	}
}