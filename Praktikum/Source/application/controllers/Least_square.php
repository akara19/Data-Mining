<?php
error_reporting(0);
class Least_square extends CI_Controller{

	// __contructor default dari controlle
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form','url','text_helper','date'));
		$this->load->database();
		$this->load->library(array('Pagination','user_agent'));
		$this->load->model('Model_least_square');
	}
	// index untuk tabel data barang
	function index(){
		$data['Type']="Data Penjualan";
		$data['Data_penjualan'] = 
        $this->Model_least_square->least_square_data()->result();
		
		$this->template->load('dashboard',
        'webadmin/Least_square/View',$data);
	}
	// form tambah data untuk tabel ppi_mahasiswa
	function Add(){
		$data['Type']="Tambah Data Mahasiswa";
		$this->template->load('dashboard','webadmin/Ppi_mahasiswa/Ppi_mahasiswa_insert',$data);
	}
	// Method atau function untuk menangkap data form ppi_mahasiswa
	// dan selanjut nya akan di lempar ke SP insert
	// dan melakukan penyimpanan data pada tabel ppi_mahasiswa
	function Insert(){
		$session = isset($_SESSION['user_login']) ? $_SESSION['user_login']:'';
		$pecah = explode("|",$session);
		$data["ppi_id"]	= $pecah[0];
		$data["Nama"]	= $pecah[1];
		// Variabel yang digunakan untuk menangkap isi dari form input data
		$Nama = $this->input->post('Nama');
		$Nim = $this->input->post('Nim');
		// Memanggil method atau fungsi untuk menyimpan data pada Model 
		$this->Ppi_mahasiswa_model->Ppi_mahasiswa_insert($Nama,$Nim,$data['ppi_id']);
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Ppi_mahasiswa'>";
	}
	// Form Edit untuk tabel ppi_mahasiswa berfungsi untuk memanggil form edit atau ubah data
	function Edit(){
		$fid = $this->uri->segment(3);
		$data['Type']="Edit / Ubah Data Mahasiswa";
		$data['Ppi_mahasiswa']=$this->Ppi_mahasiswa_model->Ppi_mahasiswa_view_edit($fid)->result();
		$this->template->load('dashboard','webadmin/Ppi_mahasiswa/Ppi_mahasiswa_edit',$data);
	}
	// Method atau function untuk menangkap data form ppi_mahasiswa
	// dan selanjut nya akan di lempar ke SP Update
	// dan melakukan penyimpanan data pada tabel ppi_mahasiswa
	function Update(){
		$session = isset($_SESSION['user_login']) ? $_SESSION['user_login']:'';
		$pecah = explode("|",$session);
		$data["ppi_id"]	= $pecah[0]; $data["Nama"]	= $pecah[1];
		// variabel yang digunakan sebagai acuan untuk melakukan proses Update
		$Id = $this->input->post('id');
		// Variabel yang digunakan untuk menamgkap isi dari form input data
		$Nama = $this->input->post('Nama');
		$Nim = $this->input->post('Nim');
		
		// Memanggil method atau fungsi untuk menyimpan data pada Model 
		$this->Ppi_mahasiswa_model->Ppi_mahasiswa_update($Id,$Nama,$Nim,$data['ppi_id']);
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Ppi_mahasiswa'>";
	}
	// form tambah data untuk tabel ppi_mahasiswa
	function Delete(){
		$Id = $this->uri->segment(3);
		$this->Ppi_mahasiswa_model->Ppi_mahasiswa_delete($Id);
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/Ppi_mahasiswa'>";
	}

// End Class
}
?>
