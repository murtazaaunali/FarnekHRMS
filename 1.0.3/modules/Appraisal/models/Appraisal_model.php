<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Appraisal_model extends MY_Model 
{
    //public $soft_deletes = TRUE;
    public $timestamps = FALSE;
    public $protected = array('id');
    
    function __construct()
    {
        parent::__construct();
    }
    
    public $rules = array(
        'insert' => array(
            'reg_num' => array(
                'field'=>'reg_num',
                'label'=>'Employee Number'
            ),
            'appraisalperiod' => array(
                'field'=>'appraisalperiod',
                'label'=>'Appraisal Period'
            ),
            'empname' => array(
                'field'=>'empname',
                'label'=>'empname'
            ),
            'jobtitle' => array(
                'field'=>'jobtitle',
                'label'=>'jobtitle'
            ),
            'department' => array(
                'field'=>'department',
                'label'=>'department'
            ),
            'lmname' => array(
                'field'=>'lmname',
                'label'=>'lmname'
            ),
            'lmjobtitle' => array(
                'field'=>'lmjobtitle',
                'label'=>'lmjobtitle'
            ),
            'team_work' => array(
                'field'=>'team_work',
                'label'=>'team_work'
            ),
            'communication' => array(
                'field'=>'communication',
                'label'=>'communication'
            ),
            'quality' => array(
                'field'=>'quality',
                'label'=>'quality'
            ),
            'documentation' => array(
                'field'=>'documentation',
                'label'=>'documentation'
            ),
            'initiative' => array(
                'field'=>'initiative',
                'label'=>'initiative'
            ),
            'technical_knowledge' => array(
                'field'=>'technical_knowledge',
                'label'=>'technical_knowledge'
            ),
            'productivity' => array(
                'field'=>'productivity',
                'label'=>'productivity'
            ),
            'safety' => array(
                'field'=>'safety',
                'label'=>'safety'
            ),
            'learning_skills' => array(
                'field'=>'learning_skills',
                'label'=>'learning_skills'
            ),
            'teaching_skills' => array(
                'field'=>'teaching_skills',
                'label'=>'teaching_skills'
            ),
            'leadership' => array(
                'field'=>'leadership',
                'label'=>'leadership'
            ),
            'total_score' => array(
                'field'=>'total_score',
                'label'=>'total_score'
            ),
            'performance_percent' => array(
                'field'=>'performance_percent',
                'label'=>'performance_percent'
            ),
            'manager_comments' => array(
                'field'=>'manager_comments',
                'label'=>'manager_comments'
            ),
            'employee_comments' => array(
                'field'=>'employee_comments',
                'label'=>'employee_comments'
            ),
            'id' => array(
                'field'=>'id',
                'label'=>'ID',
                'rules'=>'trim|is_natural_no_zero|required'
            )
        )
    );
}
