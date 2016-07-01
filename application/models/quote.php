<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends CI_Model {

	public function all(){
		return $this->db->query("SELECT * FROM quotes")->result_array();
	}

	public function create($quote){

		 $query = "INSERT INTO quotes (quote) VALUES (?)";
    		$values = array($quote['quote']);
    		return $this->db->query($query, $values);
	}
	
}