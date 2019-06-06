<?php 
	echo '<meta charset="UTF-8">';
	class Animal
	{	
		public $steps = 0;
		function move(){
			if($this->steps == 0){
				echo $this->steps;
			}
		}
	};
	$ekzAnimal = new Animal();
	$ekzAnimal ->move();

	class Notochord extends Animal{
		public $pozv = 1;
		function checkPozv(){
			if($this->pozv == 1){
				echo '<p>I have pozvonochnik</p>';
			}
		}
	};
		$ekzNotochord = new Notochord();
		$ekzNotochord->pozv;
		$ekzNotochord-> checkPozv();

		class Mammals extends Notochord{
			function moloko(){
				echo "Я пью молоко";
			}
		};
		$ekzMammals = new Mammals();
		$ekzMammals->moloko();

		class  Primates extends Mammals{
			public $pales = 0;
			function checkPales(){
				echo '<p> I have pales </p>';
			}
		};
		$ekzPrimates = new Primates();		
		echo $ekzPrimates->pales;
		$ekzPrimates->checkPales();

		class Homo extends Primates {
			function misli(){
			echo '<p>I have misli</p>';
			}
		};
		echo '<h1>DA </h1>';
		$ekzHomo = new Homo();
		$ekzHomo->misli();
		$ekzHomo->checkPales();
		$ekzHomo->moloko();
		$ekzHomo->checkPozv();
		$ekzHomo->move();
		echo '<hr>';


		class User {
			public $name;
			public $age;
			function writeNameAge(){
				echo $this->name;
				echo $this->age;
			}
		}
		$ekzUser = new User();
		$ekzUser->name = 'Nastya';
		$ekzUser->age = 17;
		$ekzUser->writeNameAge();

		class Student extends User{

			public $school = 'it-school';
			function checkSchool(){
				if ($this->school == 'it-school') {
					echo ' Я учусь в it-school ';
				}
			}
		}
		$ekzStudent = new Student();
		$ekzStudent->checkSchool();

		class Cars {
			public $model = '';
			function addWheels(){
				return new Wheels();

			}
		};
		class Wheels {
			public $diametr;
			function addDiametr($diametr){
				$this->diametr = $diametr;
			}
		};
		$car = new Cars();
		$car->model = ' Уаз';
		echo $car->model;
		$wheelsCar =  $car->addWheels();
		$wheelsCar->addDiametr(10);
		echo $wheelsCar->diametr;
		echo '<hr>';

		class Child{
			public $name;
			public $dateBirth;
			public $gender;
			function setName($name){
				$this->name = $name;
			}
			function setDate($dateBirth){
				$this->dateBirth = $dateBirth;
			}
			function setGender($gender){
				$this->gender = $gender;
			}
			function goToSchool(){
				return new addsetSchool();
			}
		};
		$child = new Child();
		$child->setName("Nastya");
		$child->setDate(2001);
		$child->setGender("женский");
		echo $child->name;
		echo $child->dateBirth;
		echo $child->gender;
		echo '<hr>';
		class addsetSchool{
			public $school;
			public $favSubjects = array();
			public $setUniversity;
			function setSchool($school){
				$this->school = $school;
			}
			function setFavSubjects($sub1,$sub2,$sub3){
				array_push($this->favSubjects, $sub1,$sub2,$sub3);
			}
			function goToUniversity($university){
				$this->setUniversity = $university;
			}

		};
		$pupil= $child->goToSchool();
		$pupil->setSchool("15 школа");
		echo $pupil->school;
		$pupil->setFavSubjects("математика","русский","английский");
		echo $pupil->favSubjects[0];
		echo $pupil->favSubjects[1];
		echo $pupil->favSubjects[2];

		//class setUniversity{
		///	public $university;		function }

		$student = $pupil->goToUniversity();
		$student->setUniversity('Массачусетский технологический институт');
		echo $student->university;


 ?>