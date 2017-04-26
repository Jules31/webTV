<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper('date');
   $this->load->helper(array('form'));
 }

 function index()
 {
    $data['streamers'] = $this->data_model->list_streamer();
	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		redirect('welcome/index', 'refresh');
	} else {
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
        $this->load->view('login',$data);
 	}
}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('welcome/index', 'refresh');
	}

}

?>