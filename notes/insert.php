<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nastya_ch_16');
	$query = mysqli_query($connect,"INSERT INTO notes (text, img, id, date) VALUES ('" . $_POST['text']. "', 'img/" . $_FILES['img']['name']. "','" . $_POST['id']. "', '".$_POST['date'] ."') ");		
	move_uploaded_file($_FILES['img']['tmp_name'],'img/' . $_FILES['img']['name']);
	header('Location: http://Nastya/notes/index.php');
 ?>