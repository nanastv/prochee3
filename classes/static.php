<meta charset="utf-8">
<?php
	function proverka(){
		$test = 0;
		$test++;
		echo $test . '<br>';
	}
	proverka();
	proverka();
	proverka();

	function proverkaStat(){
		static $test = 0;
		$test++;
		echo $test . '<br>';
	}
	proverkaStat();
	proverkaStat();
	proverkaStat();

	class myClass{
		function hi($text){
			echo $text;
		}
		public $a=12;
	}
	$ekz = new myClass();
	$ekz->hi('Hello');
	echo $ekz->a;

	class myStatClass{
		static function hello($text){
			echo $text;
		}
		static $b = 13;
	}

	myStatClass::hello(' Darova ');
	echo myStatClass::$b;

 ?>