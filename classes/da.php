<?php 
	include 'Player.php';
	include 'Enemy.php';

	use Player\Controller as Playe;
	use Enemy\Controller as Enem;

	$ekz1= new Playe();
	$ekz1->PLO();

	$ekz2 = new Enem();
	$ekz2->CON();

	include '1.php';
	use svoi\Controller as contr;
	use svoi\Game as game1;

	$ekz3=new contr();
	$ekz3->Con();

	$ekz3=new game1();
	$ekz3->GAm();


 ?>