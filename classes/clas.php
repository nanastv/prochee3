<?php 
	class Imac {
		public $screen = 'Retina 5K';
		protected $cpu = 'Intel Xeon w';
		private $keybord = 'Magic keybord';//не наследуется
		function showHardware(){
			echo  '<p>'. $this->cpu  .'</p>';
			echo  '<p>'. $this->keybord  .'</p>';
		}
	}

	$iMac = new Imac();
	echo $iMac->screen;
	//echo $iMac->cpu;//Fatal error
	//echo $iMac->keybord;//Fatal error
	$iMac->showHardware();

	class Macbook extends Imac {
		public $screen = 'Retina';
		protected $cpu = 'Intel Core i5';
		function showHardware2(){
			echo  '<p>'. $this->cpu  .'</p>';
		}
	}
	$macbook = new Macbook();
	echo $macbook->screen;
	$macbook->showHardware2();

	class Ipad extends Macbook {
		public $screen = 'Liquid Retina';
		protected $cpu = 'A12X Bionic';
		function showHardwarw3(){
			echo  '<p>'. $this->cpu  .'</p>';
		}
	}
	$ipad = new Ipad();
	echo $ipad->screen;
	$ipad->showHardwarw3();

	class Iphone extends Ipad{
		public $screen = 'Kakoito Retina';
		protected $cpu = 'Kakoi ne znay';
		function showHardware4(){
			echo  '<p>'. $this->cpu  .'</p>';
		}
	}

	$iphone = new Iphone();
	echo $iphone->screen;
	$iphone->showHardware4();

	echo '<hr>'

 ?>