<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct() 
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
       
    }
    
    public function index()
	{
        $this->load->js('assets/themes/superhero/js/score-appraisal.js');
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
		$this->load->view('Profile/Profile');
	}
}
