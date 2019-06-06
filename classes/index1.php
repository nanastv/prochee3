<?php 
	include 'lar.php';
	include 'symph.php';
	
	use Laravel\Select as Lar;
	use Symphony\Select as Sym;

	$ekz1 = new Lar();
	$ekz1->sel();

	$ekz2 = new Sym();
	$ekz2->sel();

 ?>