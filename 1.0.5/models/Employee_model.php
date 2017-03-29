<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Employee_model extends MY_Model {
    
    public $table = 'employees'; // you MUST mention the table name
    public $primary_key = 'id'; // you MUST mention the primary key
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
    public function __construct()
    {
       $this->has_one['department'] = array('foreign_model'=>'Department_model','foreign_table'=>'departments','foreign_key'=>'id','local_key'=>'dept_id');
        parent::__construct();
    }
}
