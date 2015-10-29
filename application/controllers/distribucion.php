<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Distribucion extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$this->load->view("distribucion");
	   	}

	   	
	} //fin de la clase
?>