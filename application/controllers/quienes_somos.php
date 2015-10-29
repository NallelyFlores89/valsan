<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Quienes_somos extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		$data = [
	   			1=>[
	   				'img' => 'delcid.png',
	   				'des' => 'Actualmente somos proveedores corporativos a nivel nacional de varios grupos hoteleros y hoteles como GRUPO POSADAS, PRESIDENTE INTERCONTINENTAL, MARRIOT, FOUR SEASONS, QUINTA REAL, CAMINO REAL, MELIA, así como hoteles 5 estrellas Gran Turismo y Categoría Especial, como es el caso de HOTEL HYATT, HILTON, Marquis, Holiday Inn entre otros, y en su integración horizontal se han introducido lineas de amenidades.'
	   			],
/*	   			2=>[
	   				'img' => 'wonka.png',
	   				'des' => 'Exclusiva línea de Dulces y Chocolates.'
	   			],
	   			3=>[
	   				'img' => 'savorito.png',
	   				'des' => 'Con productos de higiene institucional que cuenta con
							Certificación ISO 9001:2000 exclusivo para el mercado Hotelero de las líneas de
							Nachos.'
	   			],
	   			4=>[
	   				'img' => 'nestle.png',
	   				'des' => 'Exclusiva línea de bebidas Nesquik para el mercado Hotelero.'
	   			],*/
/*	   			5=>[
	   				'img' => 'kimberly.png',
	   				'des' => 'Con papeles y despachadores.'
	   			],
	   			6=>[
	   				'img' => 'gp.png',
	   				'des' => 'Con papeles y despachadores.'
	   			],
	   			7=>[
	   				'img' => 'tork.png',
	   				'des' => 'Con papeles y despachadores.'
	   			],
	   			8=>[
	   				'img' => 'vijusa.png',
	   				'des' => ''
	   			],*/	   				   				   				   				   			
	   		];
	   		$aux['marcas'] = $data;

	   		$this->load->view("quienes_somos", $aux);
	   	}

	   	
	} //fin de la clase
?>