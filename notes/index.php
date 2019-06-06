<!DOCTYPE html>
<html>
<head>
	<title>notes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<header class="bg-primary pt-4" style="height: 100px">
		<h4 class="text-white text-center">Создай свой список дел</h4>
	</header>
	<div class="mx-5">
	<div class="mb-5 mt-5">
		<h5>Create</h5>
		<form method="POST" action="insert.php" enctype="multipart/form-data">
			<input type="" placeholder="text" name="text">
			<input type="" name="date">
			<input type="file" name="img">
			<?php echo '<input type="hidden" name="id" value="'.$result['id'].'"  >'?>
			<button>Create</button>
		</form>
	</div>
	<?php 
			$connect = mysqli_connect('127.0.0.1','root','','nastya_ch_16');
			$query= mysqli_query($connect,"SELECT * FROM notes");
			for ($i=0; $i < $query->num_rows; $i++) { 
				$result = $query->fetch_assoc();
	?>
	<div class="row mb-3">
		 <div class="col-2 border">
		 	<p><?php echo $result['date']; ?> </p>
		 </div>

		 <div class="col-5">
		 	<div class="row">
		 		<div class="col-7 border">
		 			<p style="" class="p1" > <?php echo $result['text'];?> </p>
				 	<form method="POST" action="up.php">
				 		<input class="inp" style=" display: none;"  name="text" value=<?php echo '"'.$result['text']. '"'  ?>>
				 		<?php echo '<input  type="hidden" name="id" value="' . $result['id']. '">' ;?>
				 		<button class="but">up</button>
				 	</form>
		 		</div>
			 	<div class="col-5"> <?php echo '<img style="height:40px;width=40px" src="' . $result['img'] . '">'; ?></div>
		 	</div>
		 </div>

		 <div class="col-2">
		 	<button>done</button>
		 </div>

		 <div class="col-2 border">
		 	<form method="POST" action="delete.php">
		 		<?php echo '<input type="hidden" name="id" value="' . $result['id']. '">' ;?>
		 		<button>delete</button>
		 	</form>
		 </div>
	 </div>
	 <?php }; ?>
	</div>
	</div>
	<script ">
		var p1 = document.querySelector('.p1') ;
		var but = document.querySelector('.but');
		var inp = document.querySelector('.inp');
		var prov = false;
			but.onclick = function() { 
				if (prov == false) {
			   	 p1.style.display = 'none';
			   	 inp.style.display = 'block';
				 }
			 	 else { 
			   	 p1.style.display = 'block';
			   	 inp.style.display = 'none';
			   	};
			   	prov = true;
			 }
		  
	</script>
</body>
</html>