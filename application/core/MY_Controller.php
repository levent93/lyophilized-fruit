<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Ultimate
 */
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function page($page_name, $data = array()) {
		
		$data['session'] = $this->session->all_userdata();

		 $this->load->view('templates\header', $data);
         $this->load->view($page_name, $data);
         $this->load->view('templates\footer', $data);
	}

}
