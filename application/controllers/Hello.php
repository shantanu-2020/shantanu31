<?php

Class Hello extends CI_Controller
{

    public function index()

   {
    $this->load->view('table');
   }

   public function register()
   {
    
    $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[users.name]');
     $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[users.email]');
    $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required|trim');
    $this->form_validation->set_rules('inquiry', 'Inquiry', 'required|trim');
    
   $this->load->view('register');

    if($this->form_validation->run()==true)
    {
    	$this->load->model('Hello_Model');
    	$this->Hello_Model->insert_data();
    }
    
     {
     	$this->index();
     }
 }

   public function table()
   {
   	$this->load->model('Hello_Model');
   	$data['rows'] =$this->Hello_Model->fetch_data();
   	$this->load->view('table',$data);
   }

   public function edit_table()
   {
    $this->load->model('Hello_Model');
    $data['edit'] = $this->Hello_Model->edit_table($this->uri->segment('3'));
    $this->load->view('edit_table',$data);
   }

   public function update()
   {
    $this->load->model('Hello_Model');
    $this->Hello_Model->table_update($this->uri->segment('3'));
   }

   public function delete()
   {
    $this->load->model('Hello_Model');
    $this->Hello_Model->delete_data($this->uri->segment('3'));
   }



}



 ?>