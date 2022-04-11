<?php
class Model_least_square extends CI_Model{

	// Function / method select data ppi_mahasiswa
	function least_square_data(){
		$a_procedure = 'CALL least_square_data';
		$a_result= $this->db->query($a_procedure);
		mysqli_next_result( $this->db->conn_id);
		return $a_result;
	}
// End Class
}
?>
