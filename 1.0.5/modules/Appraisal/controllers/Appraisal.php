<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appraisal extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
       
    }
    
    public function ScoreManagerialAppraisal()
	{
        $this->load->js('assets/themes/superhero/js/score-appraisal.js');
        $this->load->js('assets/themes/superhero/js/wizard.js');
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
		$this->load->view('ScoreStaffAppraisal');
	}
    
    public function ScoreWorkerAppraisal()
	{
		$this->load->js('assets/themes/superhero/js/score-appraisal.js');
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
		$this->load->view('ScoreWorkerAppraisal');
	}
    
    public function ConfirmAppraisal() 
    {
        $this->load->js('assets/themes/superhero/js/score-appraisal.js');
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
        $data['post_back'] = $this->input->post();
		$this->load->view('Confirm', $data);
    }
    
    public function ConfirmWorkerAppraisal() 
    {
        $this->load->js('assets/themes/superhero/js/score-appraisal.js');
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
        $data['post_back'] = $this->input->post();
		$this->load->view('ConfirmWorker', $data);
    }
    
    public function SaveWorkerAppraisal() 
    {
        $this->load->model('Appraisal_model');
        $user = $this->ion_auth->user()->row();
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
        $insert = $this->Appraisal_model->insert(array(
            'total_score' => $this->input->post('total_score'),
            'performance_percent' => $this->input->post('performance_percent'),
            'reg_num' => $this->input->post('regnum'),
            'empname' => $this->input->post('empname'),
            'jobtitle' => $this->input->post('jobtitle'),
            'department' => $this->input->post('department'),
            'site' => $this->input->post('site'),
            'lmname' => $this->input->post('lmname'),
            'lmjobtitle' => $this->input->post('lmjobtitle'),
            'appraisalperiod' => $this->input->post('appraisalperiod'),
            'team_work' => $this->input->post('team_work'),
            'communication' => $this->input->post('communication'),
            'quality' => $this->input->post('quality'),
            'documentation' => $this->input->post('documentation'),
            'initiative' => $this->input->post('initiative'),
            'technical_knowledge' => $this->input->post('technical_knowledge'),
            'productivity' => $this->input->post('productivity'),
            'safety' => $this->input->post('safety'),
            'learning_skills' => $this->input->post('learning_skills'),
            'teaching_skills' => $this->input->post('teaching_skills'),
            'leadership' => $this->input->post('leadership'),
            'manager_comments' => $this->input->post('manager_comments'),
            'employee_comments' => $this->input->post('employee_comments'),
            'created_at' => date('d-m-Y'),
            'created_by' => $user->first_name." ".$user->last_name,
        ));
        if($insert === FALSE) {
            $this->load->view('Error');
        } else {
            $this->load->view('Saved');
        }
    }
    
    public function SaveAppraisal() 
    {
        $this->output->set_template('superhero');
        $this->output->set_common_meta('Farnek Online Approval System | Score Appraisal', 'Farnek Online Approval System', 'Farnek,Online,Approval,System');
		$this->load->view('Saved');
    }
}
