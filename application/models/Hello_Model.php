<?php
 /**
  * 
  */
 class Hello_Model extends CI_Model
 {
 	
 	public function insert_data()
    {
    	$data = array('name' =>$this->input->post('name') , 
                      'email' =>$this->input->post('email') , 
                      'mobile' =>$this->input->post('mobile') , 
                      'occupation' =>$this->input->post('occupation') , 
                      'inquiry' =>$this->input->post('inquiry') , 
                                                                   );
    	$this->db->insert('users',$data);
      redirect('Hello/table');
    }

    public function fetch_data()
    {
    	$this->db->select('*');
    	$t = $this->db->get('users');
    	return $t;
    }

    public function edit_table($id)
    {
      $this->db->select('*');
      $this->db->where('id',$id);
      $row = $this->db->get('users');
      return $row->row_array();
    }

    public function table_update($id)
    {
        $data = array('name' => $this->input->post('name'),
                       'email' => $this->input->post('email'),
                       'mobile' => $this->input->post('mobile'),
                       'occupation' => $this->input->post('occupation'),
                       'inquiry' => $this->input->post('inquiry'),
                                                );
        $this->db->where('id',$id);
        $this->db->update('users',$data);
        redirect('Hello/table');
    }

    public function delete_data($id)
    {
      $this->db->where('id',$id);
      $this->db->delete('users');
      redirect('Hello/table');
    }












 }














  ?>