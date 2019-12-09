<?php
/*
*/

class Roles_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->db_act = $this->load->database('db_actividades', TRUE); 			
	}

	function obtener_roles_cero($id)
	{
		$query = $this->db_act->query("select o.codigo,o.cod_opcion,o.opcion,o.link,o.nivel,o.orden,o.icono
										 from usuarios.p_opciones_usuarios u,
										      usuarios.p_opciones o	
										where u.id_usuario = ".$id."
										  and o.codigo = u.cod_opcion
										  and o.nivel = 0
										  and u.estado = 'AC'
										order by o.orden asc");	
		/*$query = $this->db_act->query("select *
									 from usuarios.p_organizacion									      
									where 1 = 2" );*/
        return $query->result();	
	}
	function obtener_roles($id)
	{
		$query = $this->db_act->query("select o.codigo,o.cod_opcion,o.opcion,o.link,o.nivel,o.orden,o.icono
									 from usuarios.p_opciones_usuarios u,
									      usuarios.p_opciones o	
									where u.id_usuario = ".$id."
									  and o.codigo = u.cod_opcion
									  and o.nivel > 0
									  and u.estado = 'AC'
									order by o.cod_opcion,o.nivel,o.orden asc");
		/*$query = $this->db_act->query("select *
									 from usuarios.p_organizacion									      
									where 1 = 2" );*/
        return $query->result();	
	}
	function verificar_rol($iduser,$codopcion)
	{
		$query = $this->db_act->query("select id
										 from usuarios.p_opciones_usuarios u
										where u.id_usuario = ".$iduser."
										  and u.cod_opcion = ".$codopcion."
										  and u.estado = 'AC'");	
        return $query->result();
	}
	

}
?>