<?php
error_reporting(0);
class Login extends CI_Controller{

	function __construct() {
		parent::__construct();
        $this->load->helper(array('form','url', 'text_helper','date'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent'));
		$this->load->model('Ppi_user_model');
	}

	function Auth(){
		$fNama = $this->input->post('fNama');
		$fPswd = $this->input->post('fPswd');
		
		$hasil 		= $this->Ppi_user_model->ppi_user_check($fNama,$fPswd);
		
		//echo count($hasil->result_array());
		//echo $fNama."<br>".$fPswd;
	
		if (count($hasil->result_array())>0){
			foreach($hasil->result() as $items){
				$session_username=$items->ppi_id."|".$items->Nama;
			}
			$_SESSION['user_login']=$session_username;
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Ppi_mahasiswa'>";
		}
		else{
			?>
			
			<script type="text/javascript">
			alert("Username atau Password Yang Anda Masukkan Salah..!!!");
			</script> 
									
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Nilai/loginpage'>";
		}
	}
	
	
	function Logout(){
		session_destroy();
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Login/loginpage'>";
	}
	
	function loginpage(){
		$data = array();
		$session=isset($_SESSION['user_login']) ? $_SESSION['user_login']:'';
		if($session!=""){
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Ppi_mahasiswa'>";
		}else{
			$this->load->view('login');
		}
	}
}
?>
