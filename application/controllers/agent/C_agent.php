<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_agent extends CI_Controller {

	public function index()
	{
		{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('ien', 'Ien', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run())
			{
				$ien= $this->input->post('ien');
				$password = $this->input->post('password');
				$this->load->model('agent/M_agent');
				$data = $this->M_agent->test_connection($ien,$password );


				if (empty($data)){
					echo "<div style='color: red'><h1>Identifiant ou mot de passe incorrects!!!</h1></div>";
					$this->load->view('agent/V_auth_agent');
				}
				else{
					echo 'connecté!!';
				}
			}

			else
			{

				echo "<div style='color: #53af57'><h2>Bienvenue dans la page d'authentification réservée aux agents du niveau central</h2></div>";
				$this->load->view('agent/V_auth_agent');
			}


		}


	}
}


