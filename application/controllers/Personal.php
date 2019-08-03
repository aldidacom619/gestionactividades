<?php

class Personal extends CI_Controller
{
	function __construct(){
		parent::__construct();	
		$this->_is_logued_in();	
		$this->load->model('roles_model');
		$this->load->model('personal_model');		
		$this->load->helper(array('form', 'url'));
		$this->load->helper('Menu_helper');
	}
	function _is_logued_in()
	{
		$is_logued_in = $this->session->userdata('is_logued_in'); 
		if($is_logued_in != TRUE)
		{
			redirect('usuarios');
		}	
	}
	function index() 
	{
		$id_usu = $this->session->userdata('id');
		$dato['id_usu'] = $id_usu;
		$dato['usuario'] = $this->session->userdata('usuario');
		$dato['rolescero'] = $this->roles_model->obtener_roles_cero($id_usu);
		$dato['roles'] = $this->roles_model->obtener_roles($id_usu);

		$this->load->view("Inicio/cabecera");
		$this->load->view("Inicio/cabecera");		
		$this->load->view("Inicio/menu",$dato);		
		//$this->load->view("Inicio/cuerpo");		
		$this->load->view("Inicio/pie");
	}
	function asignacion_area()
	{
		$id_usu = $this->session->userdata('id');
		if(1 == 1)
		{
			$dato['id_usu'] = $id_usu;
			$dato['usuario'] = $this->session->userdata('usuario');
			$dato['rolescero'] = $this->roles_model->obtener_roles_cero($id_usu);
			$dato['roles'] = $this->roles_model->obtener_roles($id_usu);
			$dato['personas'] = $this->personal_model->get_personas();

			$this->load->view("Inicio/cabecera");
			$this->load->view("Inicio/cabecera");		
			$this->load->view("Inicio/menu",$dato);		
			$this->load->view("Personal/lista_personas");		
			$this->load->view("Inicio/pie");
		}
		else{
			//$this->index();
			redirect("inicio");
		}
	}
	function asignar_area($id)
	{
		$id_usu = $this->session->userdata('id');
		if(1 == 1)
		{
			$dato['id_usu'] = $id_usu;
			$dato['usuario'] = $this->session->userdata('usuario');
			$dato['rolescero'] = $this->roles_model->obtener_roles_cero($id_usu);
			$dato['roles'] = $this->roles_model->obtener_roles($id_usu);
			$dato['personas'] = $this->personal_model->get_personas();

			$this->load->view("Inicio/cabecera");
			$this->load->view("Inicio/cabecera");		
			$this->load->view("Inicio/menu",$dato);		
			$this->load->view("Personal/form_asignar_area");		
			$this->load->view("Inicio/pie");
		}
		else
		{
			//$this->index();
			redirect("inicio");
		}
	}
	function getorganizacion()
	{
		$filas = $this->personal_model->getorganizacion();
		$option = "<option VALUE='-1'>Seleccionar organización</OPTION>";
		foreach ($filas as $fila) 
		{
			$option.="<option value = '".$fila->codigo."'>".$fila->denominacion."</option>";		
		}
		echo $option;
	}
	function gettipousuario()
	{
		$rol = $this->input->get('id');
		$filas = $this->personal_model->gettipousuario($rol);
		$option = "<option VALUE='-1'>Seleccionar tipo de usuario</OPTION>";
		foreach ($filas as $fila) 
		{
			$option.="<option value = '".$fila->codigo."'>".$fila->descripcion_user."</option>";		
		}
		echo $option;
	}
}
?>