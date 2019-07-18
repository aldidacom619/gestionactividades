<?php 
class Usuarios extends CI_Controller 
{
	function __construct(){
		parent::__construct();   

			$this->load->model('usuarios_model');
    		//$this->load->library('My_PHPMailer');
    		$this->load->helper(array('form', 'url'));
    	
			$this->load->library('form_validation');
		
	}

	function index($mensaje = "")
	{	
		$dato['error'] =$mensaje;
		$this->load->view("Usuario/logued",$dato);        
	}
	function logued() 
	{	
		$username = ($this->input->post('username'));
		$password =  md5($this->input->post('pass'));
		echo $username." - ".$password;
		$login = $this->usuarios_model->loguear($username, $password);
		if($login)
		{
			//echo $login[0]->estado;
			if( $login[0]->estado == 'AC')
			{
				$data = array(
					'is_logued_in'  => TRUE,
					'id' => $login[0]->id,
					  'ci' => $login[0]->ci,
					  'nombres' => $login[0]->nombres,
					  'primer_apellido' => $login[0]->primer_apellido,
					  'segundo_apellido' => $login[0]->segundo_apellido,
					  'usuario' => $login[0]->nombres." ".$login[0]->primer_apellido." ".$login[0]->segundo_apellido,
					  'sexo' => $login[0]->sexo,
					  'fecha_nacimiento' => $login[0]->fecha_nacimiento,
					  'telefono' => $login[0]->telefono,
					  'correo' => $login[0]->correo,
					  'direccion' => $login[0]->direccion,
					  'cargo' => $login[0]->cargo,
					  'id_tipo_user' => $login[0]->id_tipo_user,
					  'username' => $login[0]->username,					 
					  'estado' => $login[0]->estado,
									
				); 
				$this->session->set_userdata($data);				
				redirect("inicio");
			}
			else
			{
				$mensaje ="El usuario no se encuentra habilitado contactece con el administrador";
				$this->index($mensaje);
			}		
		}		
		else 
		{
			$this->index('EL NOMBRE O CONTRASEÑA INCORRECTO');
		}	
	}
	/*//redirect("inicio");
		/*$fecha = date('Y-m-j H:i:s');
		$nuevafecha = strtotime ( '-4 hour' , strtotime ( $fecha ) ) ;
		$fecha = date ( 'Y-m-j' , $nuevafecha );
		$username = $this->input->post('username');
		$password = md5($this->input->post('pass'));
		$login = $this->usuarios_model->loguear($username, $password);
		*/
	function salir()
	{
		$this->session->sess_destroy();
		redirect('Usuarios');
	}
}

?>