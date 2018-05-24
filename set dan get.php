<?php 

class robot {

	//property
	public $suara;

	//nama set_suara bebas bisa apa aja
	//dan ($suara) adalah paramaternya
	pubic function set_suara($suara){
		//$this memanggil public suara tanpa $
		//dan $suara mengambil dari parameter diatas
		$this->suara = $suara;

	}

	public function get_suara(){
		return this->suara;
	}

	//jadi perbedaan set dan get terletak di pemanggilannya



}
 $robot1 = new robot;
 $robot1->set_suara('ngik ngik');
 echo 'bunyinya adalah ' . $robot->get_suara();
?>