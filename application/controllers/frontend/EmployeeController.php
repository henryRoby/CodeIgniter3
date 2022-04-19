<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller{
    public function index(){
        $this->load->view('template/header');
        // methode fetch data from database
        $this->load->database();
        //load the model 
        $this->load->model("EmployeeModel");
        //load the method of model 
         $data['h'] = $this->EmployeeModel->getEmployee();
        //return the data in view
        $this->load->view('frontend/employee',$data);
        $this->load->view('template/footer');
    }

    public function create(){
        $this->load->view('template/header');
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }

    public function store(){
        $this->form_validation->set_rules('first_name','First_name','required');
        $this->form_validation->set_rules('last_name','Last_name','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('email','Email','required');

        if ($this->form_validation->run()) {
            $data = [
                'first_name'=>$this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'phone'=>$this->input->post('phone'),
                'email'=>$this->input->post('email'),
            ]; 
            //var_dump($data);
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->insertEmployee($data);
            redirect(base_url('Employee'));
        }else{
            $this->create();
            //redirect(base_url('employee/add'));
        }
    }
    public function edit($id)
    {
        $this->load->view('template/header');
        $this->load->model("EmployeeModel");
        $data['employee']=$this->EmployeeModel->editEmployee($id);

        $this->load->view('frontend/edit',$data);
        $this->load->view('template/footer');
    }

    //update database
    public function update($id)
    {
        $this->form_validation->set_rules('first_name','First_name','required');
        $this->form_validation->set_rules('last_name','Last_name','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('email','Email','required');

        if ($this->form_validation->run()) :
            $data = [
                'first_name'=>$this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'phone'=>$this->input->post('phone'),
                'email'=>$this->input->post('email'),
            ];

            $this->load->model("EmployeeModel");
            $data['employee']=$this->EmployeeModel->updateEmployee($data,$id);
            redirect(base_url('Employee'));
        else:
            $this->edit($id);
        endif; 
    }

    // methode delete
    public function delete($id)
    {
        $this->load->model("EmployeeModel");
        $this->EmployeeModel->deleteEmployee($id);
        redirect(base_url('Employee'));
    }
}
?>