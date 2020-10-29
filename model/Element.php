<?php

class Element extends Connect{
    private $db;
	private $lements;
	public function __construct(){
		$this->db = Connect::connection();
		$this->elements = array();
    } 
    public function get_elements(){
		$query = $this->db->query("SELECT * FROM elements");
		while ($rows = $query->fetch_assoc()){
			$this->elements[] = $rows;
		}
		return $this->elements;
    }
    public function get_element($id) {
		$sql="SELECT * FROM elements WHERE ID=".$id;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
    }
  
}



?>