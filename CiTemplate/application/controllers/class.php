<?php

class Class extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->helper(array('html','url','form'));
 $this->load->library(array('form_validation','table','pagination');
 $this->load->model('Class_model','model');
 $this->template->set('title','Class');
 $this->template->set('nav','Class');
 if (!$this->ion_auth->logged_in()) { redirect('auth/login'); }		
 }

 // views

 function index()
 {
 $data['query'] = $this->model->get_entries();
 $this->template->load('template','Class_index',$data);
 }

 function view()
 {
 $data['query'] = $this->model->get_entry();
 $this->template->load('template','Class_view',$data);
 }
	
 function add()
 {
 $data['query'] = $this->model->get_entry();
 $this->template->load('template','Class_add',$data);
 }

 function edit()
 {
 $data['query'] = $this->model->get_entry();
 $this->template->load('template','Class_edit',$data);
 }

 // database operations

 function insert()
 {
 $this->form_validation->set_rules('field1','fieldname1','required');
 $this->form_validation->set_rules('field2','fieldname2','required');
 if ($this->form_validation->run()==FALSE)
  {
  $data['query'] = $this->model->get_entry();
  $this->template->load('template','Class_add',$data);
  } else {
  $this->model->insert_entry();
  redirect('Class/index');
  }
 }
	
 function delete()
 {
 $this->model->delete_entry();
 redirect('Class/index');
 }
	
 function save()
 {
 $this->form_validation->set_rules('field1','fieldname1','required');
 $this->form_validation->set_rules('field2','fieldname2','required');
 if ($this->form_validation->run()==FALSE)
  {
  $this->db->where('id', $this->uri->segment(3));
  $data['query'] = $this->model->get_entry();
  $this->template->load('template','Class_edit',$data);
  } else {
  $data['query'] = $this->model->update_entry();
  redirect('Class/index');
  }		
 }

}

/* End of file Class.php */
/* Location: ./application/controller/Class.php */
