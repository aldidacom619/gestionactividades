<?php
/*
*/

class Personal_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->db_act = $this->load->database('db_actividades', TRUE); 			
	}
	function get_personas()
	{		
		$query = $this->db_act->query("select *
									 from usuarios.t_usuarios									      
									where estado = 'AC'
									order by primer_apellido asc" );
        return $query->result();	
	}
	function getorganizacion()
	{
		$query = $this->db->query("select *
									 from usuarios.p_organizacion
									where estado = 'AC'
									order by codigo asc");	
        return $query->result();
	}
	function gettipousuario($codigo)
	{
		$query = $this->db->query("select *
									 from usuarios.p_tipousuario
									where cod_organizacion =".$codigo."
									  and estado = 'AC'");	
        return $query->result();
	}
}
?>