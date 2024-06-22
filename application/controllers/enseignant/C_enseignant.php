<?php
class C_enseignant extends 	CI_Controller {

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
			$this->load->model('enseignant/M_enseignant');
			$data = $this->M_enseignant->test_connection($ien,$password );


			if (empty($data)){
				echo "<div style='color: red'><h1>Identifiant ou mot de passe incorrects!!!</h1></div>";
				$this->load->view('enseignant/V_auth_enseignant');
			}
			else{
				$this->load->model('inspecteur/queries');
				$normes = $this->queries->getNormes();
				$this->load->view('enseignant/V_enseignant', ['normes'=>$normes]);
			}
		}
		else
		{
			//$this->load->view('formsuccess');
			echo "<div style='color: #53af57'><h2>Bienvenue dans la page d'authentification réservée aux enseignants</h2></div>";
			$this->load->view('enseignant/V_auth_enseignant');
		}
	}

	public function retour(){
		$this->load->model('inspecteur/queries');
		$normes = $this->queries->getNormes();
		$this->load->view('enseignant/V_enseignant', ['normes'=>$normes]);
	}

	public function voir_normes(){
		$this->load->model('inspecteur/queries');
		$normes = $this->queries->getNormes();
		$this->load->view('enseignant/V_etudier_normes', ['normes'=>$normes]);

	}

	public function ajout_cours(){
		$this->load->view('enseignant/V_upload_cours');
	}








}
