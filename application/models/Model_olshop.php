<?PHP
 
 class Model_olshop extends CI_model
 {
 	//fungsi mengambil konfigurasi database
 	function __construct()
 	{
 		parent::__construct();

 	}
 	function select_user(){
 		$sql=$this->db->query("select *from user");

 		return $sql;
 	}

  

 }








?>