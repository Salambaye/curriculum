<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('template/body');
	}

	public function se_connecter(){
		$this->load->view('V_user');
	}



	/*public function administration()
	{
		$this->load->view('administration');
	}

	public function inspecteur()
	{
		$this->load->view('inspecteur');
	}

	public function enseignant()
	{
		echo 'Accueil';
		$this->load->view('enseignant');
	}

	public function eleve()
	{
		echo 'Accueil';
		$this->load->view('eleve');
	}

	public function parent()
	{
		echo 'Accueil';
		$this->load->view('parent');
	}*/





}
