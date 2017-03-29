<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Dashboard', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
    }
	public function index()
	{
		$this->load->view('Settings');
	}
}
