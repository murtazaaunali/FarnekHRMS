<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    
    public function get_employee($emp_code) {
        $this->load->model('employee_model');
        $data = $this->employee_model->with_department()->where('emp_num LIKE', '%'.$emp_code)->as_array()->get();
        echo json_encode($data);
    }
}
