<?php 

class robot {

	//property
	public $suara = 'ngik ngik';

	//metode
	public function suaraRobot(){
		//jika dalam satu pengguna menggunakan $this
		echo 'suara robotnya adalah ' . $this->suara;
	}

}
 $robot1 = new robot;
 $robot1->suaraRobot();
?>