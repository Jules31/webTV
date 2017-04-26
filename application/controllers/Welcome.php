<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($streamer = null)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['streamers'] = $this->data_model->list_streamer();
			$data['streamer'] = $this->data_model->get_streamer_infos($streamer);
			$data['username'] = $session_data['username'];
			$this->load->view('index', $data);
		}
		else{
			redirect('login', 'refresh');
		}
	}

	public function video($streamer = null){
		$data['streamers'] = $this->data_model->list_streamer();
		$data['streamer'] = $this->data_model->get_streamer_infos($streamer);
		$data['videos'] = $this->data_model->video_streamer($streamer);
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}else{
			$data['username'] = "Guest";
		}
		$this->load->view('video', $data);
	}

	public function login(){
		$this->load->view('login');
	}
}
