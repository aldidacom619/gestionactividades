<?php
/*
*/

class Usuarios_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->db_act = $this->load->database('db_actividades', TRUE); 		
	}

	function loguear($username, $password)
	{
		$query = $this->db_act->query("select *
									 from usuarios.usuarios 
									where username = '".$username."' 
									  and contrasenia = '".$password."'");	
        return $query->result();   
	}
	
	

}
?>