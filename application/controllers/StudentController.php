<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller{
    public function index(){
        $this->load->model('StudentModel');

        $student = $this->StudentModel->student_data();
        echo "Name ".$student;
    }

    public function show($id){
        //echo $id;
        $this->load->model('StudentModel');
        $select_stud = $this->StudentModel->student_show($id);
        echo $select_stud;
    }

}

?>