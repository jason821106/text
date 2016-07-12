<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Text extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('lad_model');
	}

	public function index(){
		$arr=array('a'=>'2','b'=>'3','c'=>'4');
		$this->lad_model->insert($arr);
	}

}
