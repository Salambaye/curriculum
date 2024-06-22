<?php

class C_eleve extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('ien', 'Ien', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
		{
			$ien= $this->input->post('ien');
			$password = $this->input->post('password');
			$this->load->model('eleve/M_eleve');
			$data = $this->M_eleve->test_connection($ien,$password );
			//$data['all'] = $this->M_eleve->test_connection($ien,$password);

			if (empty($data)){
				echo "<div style='color: red'><h1>Identifiant ou mot de passe incorrects!!!</h1></div>";
				$this->load->view('eleve/V_auth_eleve');
			}
			else{
				$this->load->view('eleve/V_eleve');
			}
		}

		else
		{
			//$this->load->view('formsuccess');
			echo "<div style='color: #53af57'><h2>Bienvenue dans la page d'authentification réservée aux élèves et aux parents d'élèves</h2></div>";
			$this->load->view('eleve/V_auth_eleve');
		}


	}

	public function retour(){
		$this->load->view('eleve/V_eleve');
	}

	public function psection()
	{
		echo 'Welcome';
	}

	public function msection()
	{
		echo 'Welcome';
	}

	public function gsection()
	{
		echo 'Welcome';
	}

	public function gestion_ci()
	{
		echo 'Welcome';
	}

	public function gestion_cp()
	{
		echo 'Welcome';
	}

	public function gestion_ce1()
	{
		echo 'Welcome';
	}

	public function gestion_ce2()
	{
		echo 'Welcome';
	}

	public function gestion_cm1()
	{
		echo 'Welcome';
	}

	public function gestion_cm2()
	{
		echo 'Welcome';
	}

	public function gestion_sixieme()
	{
		echo 'Welcome';
	}

	public function gestion_cinquieme()
	{
		$this->load->view('eleve/V_cinquieme');
	}

	public function gestion_quatrieme()
	{
		echo 'Welcome';
	}

	public function gestion_troisieme()
	{
		echo 'Welcome';
	}

	public function gestion_seconde()
	{
		echo 'Welcome';
	}

	public function gestion_premiere()
	{
		echo 'Welcome';
	}

	public function gestion_terminale()
	{
		$this->load->view('eleve/V_terminale');
	}
}


?>



