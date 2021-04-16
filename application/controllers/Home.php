<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $data["sc"] =  '<script>document.write(window.screen.width)</script>';
		// var_dump($data["sc"]);die();
		// $data["screen_width"] = isset($_POST['width'])?$_POST['width']:'';
		$this->load->view('home');
	}

	public function Progress()
	{
		$this->load->view('progress');
	}

	public function Progress2()
	{
		$this->load->view('progress2');
	}

	public function Progress3()
	{
		$this->load->view('progress3');
	}

	public function Progress4()
	{
		$this->load->view('progress4');
	}

	public function Progress5()
	{
		$this->load->view('progress5');
	}

	public function Progress6()
	{
		$this->load->view('progress6');
	}

	public function Progress7()
	{
		$this->load->view('progress7');
	}

	public function Review()
	{
		$this->load->view('review');
	}	
	
	public function Terms()
	{
		$this->load->view('terms');
	}
	public function Privacy()
	{
		$this->load->view('privacy_policy');
	}
	public function Error()
	{
		$this->load->view('error_404');
	}

	public function __construct()
    {
		parent::__construct();
		// $sc =  "<script>var screen_width = window.screen.width 
		// </script>";
   		// echo "<script>document.cookie = 'screen_width = '+screen_width;</script>";
		// $this->load->model("Registration_model",'Registration_model');
		$lang=($this->session->userdata('lang')) ? $this->session->userdata('lang') : config_item('language');
		$this->lang->load('form',$lang);
    }
}
