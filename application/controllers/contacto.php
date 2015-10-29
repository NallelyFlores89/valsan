<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Contacto extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
			$this->load->library('form_validation');
			$this->load->library('email');
	   	}

	   	function index(){
	   		$this->load->view("contacto");
	   	}

	   	function enviar_forma(){
	   		if(isset($_POST)){
	   			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
 				$this->form_validation->set_rules('name', 'Nombre', 'required');
 				$this->form_validation->set_rules('email', 'Email', 'required|email');
 				$this->form_validation->set_rules('phone', 'Teléfono', 'required');
 				$this->form_validation->set_rules('msg', 'Mensaje', 'required');
 				$this->form_validation->set_rules('company', 'Empresa', 'required');
				$this->form_validation->set_message('required', 'Campo obligatorio');
	   			if ($this->form_validation->run() == FALSE){
					$this->load->view('contacto');
				}else{
					$to = 'delcid@prodigy.net.mx'. ', ';
					$to .= 'anjudark89@gmail.com'. ', ';
					$to .= 'lourdes.valdes@valsan.com.mx';
					$to .= 'carlos@deklan.net';

					$subject = 'Nuevo mensaje de página Valsan';
					$message = '<b>'.$_POST['name'].'</b> ¡Nos ha enviado un mensaje!<br><br>';
					$message .= '<b>Empresa: '.$_POST['company'].'</b><br><br>';
					$message .= '<b>Correo: '.$_POST['email'].'</b><br><br>';
					$message .= '<b>Teléfono: '.$_POST['phone'].'</b><br><br>';
					$message .= '<b>Mensaje: '.$_POST['msg'].'</b><br><br>';

					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					// Additional headers
					$headers .= 'From: ' .$_POST['email']. "\r\n";

					if(mail($to, $subject, $message, $headers)){
						$data['name'] = $_POST['name'];
						$this->load->view('gracias_msg',$data);
					}else{
						echo "<p>Lo sentimos. Hubo un problema al enviar tu mensaje. Estamos trabajando en ello. Da click 
						<a href='".base_url()."'>AQUÍ</a> para regresar a nuestra página</p>";
					}
				}
			   	
			}
		}
	   	
	} //fin de la clase
?>