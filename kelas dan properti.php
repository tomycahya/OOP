<?php 

//kelas adaah suatu struktur yang membentuk objek
class SuatuKelas{
	function SuatuMetode(){
		echo 'fungsi SuatuMetode dijalankan';
	}
	static function SuatuMetodeStatic(){
		echo 'fungsi SuatuMetodeStatic dijalankan';
	}
}

//kelas konstruktor
//konstruktor adalah suatu fungsi yang secara
//>>>otomatis dijalankan pada saat kelas terbentuk
class SuatuKelas{
	function __construct(){
		echo 'suatu konstruk dijalankan';
	}
}

//metode kelas
//adalah suatu fungsi kelas yang digunakan sebagai
//>>>media interaksi antara kelas dan objek di luar
//maupun didalam kelas
class SuatuKelas{
	public function SuatuMetode(){
		echo 'SuatuMetode dijalankan';
	}
}

class robot{

	//property pertama harus menggunakan public
	public $suara = 'ngik ngik';
}
//harus menggunakan new
 $robot1 = new robot;
 echo 'suara robot ' . $robot1->suara;

 //maka hasilnya adalah suara robot ngik ngik
?>
