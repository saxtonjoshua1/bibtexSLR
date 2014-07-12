<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Title of document</title>
</head>

<body>

<h1>File Uploaded</h1>

<?php
//$ans = $_POST['pass'];
//$con = new mysqli('localhost','uMoviesRoot',"$ans",'movies');
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //}
  //else{
 
$okay=true;
if($_FILES['uploaded']['error']>0){
	echo 'A problem was detected:<br/>';
	switch($_FILES['uploaded']['error']){
		case 1: echo '* File exceeded maximum size allowed by server.<br/>'; break;
		case 2: echo '* File exceeded maximum size allowed by application.<br/>'; break;
		case 3: echo '* File could not be fully uploaded.<br/>'; break;
		case 4: echo '* File was not uploaded.<br/>';
	}
$okay=false;
}
//if($okay &&$_FILES['uploaded']['type']!='text/plain'){
	//echo 'A problem was detected:<br/>';
	//echo '* File is not a text file.<br/>';
	//$okay=false;
//}
$filename='file.bib';
if($okay){
	if(is_uploaded_file($_FILES['uploaded']['tmp_name'])){
	if(!move_uploaded_file($_FILES['uploaded']['tmp_name'],$filename)){
		echo 'A problem was detected:</br>';
		echo '* Could not copy file to final destination.<br/>';
		$okay=false;
	}
	}
	else{
		echo 'A problem was detected: <br/>';
		echo '* File to copy is not an uploaded file.<br/>';
		$okay=false;
	}
}
if($okay){
	
	echo 'File uploaded successfully.';

	//fclose($file);
	
 }

//}
?>




</body>
</html>
