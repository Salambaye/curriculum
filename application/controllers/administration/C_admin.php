<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

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
			$this->load->model('administration/M_admin');
			$data = $this->M_admin->test_connection($ien,$password );


			if (empty($data)){
				echo "<div style='color: red'><h1>Identifiant ou mot de passe incorrects!!!</h1></div>";
				$this->load->view('administration/V_auth_admin');
			}
			else{
				$this->load->model('inspecteur/queries');
				$normes = $this->queries->getNormes();
				$this->load->view('administration/V_admin', ['normes'=>$normes]);
			}
		}

		else
		{
			echo "<div style='color: #53af57'><h2>Bienvenue dans la page d'authentification réservée à l'administration</h2></div>";
			$this->load->view('administration/V_auth_admin');
		}




	}

	public function retour(){
		$this->load->model('inspecteur/queries');
		$normes = $this->queries->getNormes();
		$this->load->view('administration/V_admin', ['normes'=>$normes]);
	}


	public function Norme_valide(){
		$this->load->view('administration/V_norme_valide');
	}

	public function Norme_nonvalide(){
		echo 'Non Validée';
	}


}
