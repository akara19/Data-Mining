<?php
class Model_databarang extends CI_Model{

	// Function / method insert data ppi_mahasiswa
	function ppi_mahasiswa_insert($fNama,$fNim,$fUser_create){
		$a_procedure = 'CALL ppi_mahasiswa_insert(?,?,?)';
		$a_result= $this->db->query($a_procedure,array(
			'fNama'=>$fNama,
			'fNim'=>$fNim,
			'fUser_create'=>$fUser_create
		));
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}
	// Function / method Update data ppi_mahasiswa
	function ppi_mahasiswa_update($fppi_id,$fNama,$fNim,$fUser_create){
		$a_procedure = 'CALL ppi_mahasiswa_update(?,?,?,?)';
		$a_result= $this->db->query($a_procedure,array(
			'fppi_id'=>$fppi_id,
			'fNama'=>$fNama,
			'fNim'=>$fNim,
			'fUser_create'=>$fUser_create
		));
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}
	// Function / method delete data ppi_mahasiswa
	function ppi_mahasiswa_delete($fppi_id){
		$a_procedure = 'CALL ppi_mahasiswa_delete(?)';
		$a_result= $this->db->query($a_procedure,array(
			'fppi_id'=>$fppi_id
		));
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}
	// Function / method select data ppi_mahasiswa
	function databarang_view(){
		$a_procedure = 'CALL data_barang';
		$a_result= $this->db->query($a_procedure);
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}
	// Function / method select data ppi_mahasiswa untuk proses edit data
	function ppi_mahasiswa_view_edit($fppi_id){
		$a_procedure = 'CALL ppi_mahasiswa_view_edit(?)';
		$a_result= $this->db->query($a_procedure,array(
			'fppi_id'=>$fppi_id
		));
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}
	
	// Function / method select data ppi_mahasiswa untuk proses edit data
	function get_mahasiswa_view_kode($fKode){
		$a_procedure = 'CALL get_mahasiswa_view_kode(?)';
		$a_result= $this->db->query($a_procedure,array(
			'fKode'=>$fKode
		));
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}

// End Class
}
?>
