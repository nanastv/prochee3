<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nastya_ch_16');
	$query = mysqli_query($connect,"DELETE FROM notes WHERE id ='" . $_POST['id'] . "'");		
	header('Location: http://Nastya/notes/index.php')
 ?>