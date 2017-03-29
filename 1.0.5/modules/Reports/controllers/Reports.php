<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
       
    }
    
    public function Index() {
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Generate Appraisal Report', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
        $this->load->view('Reports');
    }
    
    public function Appraisals() 
    {
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Generate Appraisal Report', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
        $this->load->model('Appraisal_model');
		$results = $this->Appraisal_model->where(array('reg_num' => $this->input->post('regnum'),'appraisalperiod' => $this->input->post('appraisalperiod')))->get_all();
        if(!empty($results)) {
		  $data['results'] = $results;
        } else {
            $data['noresult'] = "No results found.";
        }
        $this->load->view('Generate',$data);
    }
    
    public function Appraisal($id) 
    {
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Generate Appraisal Report', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
        $this->load->model('Appraisal_model');
		$results = $this->Appraisal_model->get($id);
        if(!empty($results)) {
		  $data['results'] = $results;
        } else {
            $data['noresult'] = "No results found.";
        }
        $this->load->view('GenerateAppraisal',$data);
    }
    
    public function EmployeesReport() 
    {
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Generate Appraisal Report', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
		$this->load->view('Generate');
        
        print_r($this->input->post());
    }
}