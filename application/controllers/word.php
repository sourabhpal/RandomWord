<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Word extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->session->set_userdata('counter', 1);
		$data = array(
			'counter' => $this->session->userdata('counter'),
			'word' => "");
		$this->load->view('randomword', $data);
	}

	public function getWord(){
		$counter = $this->session->userdata('counter');
		$this->session->set_userdata('counter', $counter+1);
		$data = array(
			'counter' => $this->session->userdata['counter'],
			'word' => $this->generateRandomString()
			);
		$this->load->view('randomword', $data);	
	}

	public function generateRandomString() {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 14; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
		}
}