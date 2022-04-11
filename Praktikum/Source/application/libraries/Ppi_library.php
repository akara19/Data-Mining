<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ppi_library {
	/**
	* 
	* @param merupakan variable lemparan dari method post $param
	* 
	* @return Akan menghasilkan sebuah data tanggal dengan format MySql yyyy-mm-dd
	* 
	*/
	function Change_format_date($param) {
		$Temp = date('Y-m-d',strtotime(str_replace('/','-',$param)));
		return $Temp;		
	}
	
	/**
	* 
	* @param undefined $param
	* 
	* @return Menghasilkan sebuah nilai untuk merubah format tanggal dari MySql('Y-m-d') kedalam format indonesia ('d-m-Y')
	*/
	
	function Change_format_date_ind($param){
		$Temp = date('d-m-Y',strtotime($param));
		return $Temp;
	}
		
	
	
}