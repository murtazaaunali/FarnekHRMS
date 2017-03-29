<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    public function __construct() 
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
        $this->output->set_template('superhero');
        $this->load->css('assets/themes/superhero/css/jsgrid.css');
        $this->load->js('assets/themes/superhero/js/jsgrid.js');
        $this->load->js('assets/themes/superhero/js/score-appraisal.js');
        $this->output->set_common_meta('Farnek Online Approval System | Dashboard', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
    }
	public function index()
	{
		$this->load->view('Dashboard/Dashboard');
	}
}
