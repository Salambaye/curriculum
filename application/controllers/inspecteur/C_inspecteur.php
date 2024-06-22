<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inspecteur extends CI_Controller {

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
			$this->load->model('inspecteur/M_inspecteur');
			$data = $this->M_inspecteur->test_connection($ien,$password );


			if (empty($data)){
				echo "<div style='color: red'><h1>Identifiant ou mot de passe incorrects!!!</h1></div>";
				$this->load->view('inspecteur/V_auth_inspecteur');
			}
			else{
				$this->load->model('inspecteur/queries');
				$normes = $this->queries->getNormes();
				$this->load->view('inspecteur/V_inspecteur', ['normes'=>$normes]);

			}
		}
		else
		{
			//$this->load->view('formsuccess');
			echo "<div style='color: #53af57'><h2>Bienvenue dans la page d'authentification réservée aux inspecteurs</h2></div>";
			$this->load->view('inspecteur/V_auth_inspecteur');
		}


	}

	public function retour(){
		$this->load->model('inspecteur/queries');
		$normes = $this->queries->getNormes();
		$this->load->view('inspecteur/V_inspecteur', ['normes'=>$normes]);
	}



	public function ajouter_norme(){
		$this->load->view('inspecteur/V_ajout_norme');

	}

	public function modifier_norme($id){
		$this->load->model('inspecteur/queries');
		$norme = $this->queries->getSingleNormes($id);
		$this->load->view('inspecteur/V_modifier_norme', ['norme'=>$norme]);

	}


	public function save_norme(){
		$this->form_validation->set_rules('cycle', 'Cycle', 'required');
		$this->form_validation->set_rules('serie', 'Série', 'required');
		$this->form_validation->set_rules('classe', 'Classe', 'required');
		$this->form_validation->set_rules('matiere', 'Matiere', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			$today = date('Y-m-d');
			$data['date_ajout'] = $today;

			unset($data['submit']);
			$this->load->model('inspecteur/queries');
			if ($this->queries->Ajout_normes($data)){
				$this->session->set_flashdata('msg', 'Norme ajoutée avec succés!');
			}
			else{
				$this->session->set_flashdata('msg', 'Echec d\'ajout de la norme');
			}
			return redirect('inspecteur/C_inspecteur/retour');

		}
		else
		{
			$this->load->view('inspecteur/V_ajout_norme');
		}

	}

	public function change_norme($id){
		$this->form_validation->set_rules('cycle', 'Cycle', 'required');
		$this->form_validation->set_rules('serie', 'Série', 'required');
		$this->form_validation->set_rules('classe', 'Classe', 'required');
		$this->form_validation->set_rules('matiere', 'Matiere', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			$today = date('Y-m-d');
			$data['date_ajout'] = $today;

			unset($data['submit']);
			$this->load->model('inspecteur/queries');
			if ($this->queries->Modifier_normes($data, $id)){
				$this->session->set_flashdata('msg', 'Norme modifiée avec succés!');
			}
			else{
				$this->session->set_flashdata('msg', 'Echec de modification de la norme');
			}
			return redirect('inspecteur/C_inspecteur/retour');

		}
		else
		{
			$this->load->view('inspecteur/V_ajout_norme');
		}
	}



	public function consulter_norme($id){
		$this->load->model('inspecteur/queries');
		$norme = $this->queries->getSingleNormes($id);
		$this->load->view('inspecteur/V_consulter_norme', ['norme'=>$norme]);
	}

	public function supprimer_norme($id){
		$this->load->model('inspecteur/queries');
		if ($this->queries->deleteNormes($id)){
			$this->session->set_flashdata('msg', 'Norme supprimée avec succés!');
		}
		else{
			$this->session->set_flashdata('msg', 'Echec de suppression de la norme');
		}
		return redirect('inspecteur/C_inspecteur/retour');

	}

}
