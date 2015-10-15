<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Board_ftp extends CI_Controller {
	
	private $ctr = 0;
	private $path = array();
	private $ftp_ip = '172.20.45.126';
	
	function index() {
		$this->load->helper('directory');
		$data['ulli'] = $this->make_ulli2(directory_map("ftp://172.20.45.126/"));
		
		$this->load->view('templates/header');
		$this->load->view('ftp_files',$data);
		$this->load->view('templates/footer');
	}
	
	function make_ulli2($array) {
		$output = '<ul>';
		foreach($array as $item => $val){  
			if(!is_array($val)) {
				$output .= '<li><a target="_blank" ';
				$output .= 'href="ftp://'.$this->ftp_ip.'/';
				$output .= (implode('/',$this->path) == '' ? '' : implode('/',$this->path).'/');
				$output .= $val.'">'.$val.'</a></li>';
			}else {
				array_push($this->path, str_replace('\\','',$item));
				$output .= '<li><input type="checkbox" id="'.str_replace('\\','',$item).$this->ctr.'"/>';
				$output .= '<label for="'.str_replace('\\','',$item).$this->ctr.'">'.str_replace('\\','',$item).'</label>';
				$this->ctr += 1;
				$output .= $this->make_ulli2($val);
				$output .= '</li>';
				array_pop($this->path);
			}
		}   
		$output .= '</ul>';
		return $output;
	}
	
}