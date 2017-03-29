<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Department_model extends MY_Model {
    
    public $table = 'departments'; // you MUST mention the table name
    public $primary_key = 'id'; // you MUST mention the primary key
    public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
    public function __construct()
    {
        parent::__construct();
    }
}
