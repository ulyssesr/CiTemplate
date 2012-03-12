<?php

class Class_model extends CI_Model {
	
 function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

 // queries

 function get_entry()
 {
 $this->db->where('id', $this->uri->segment(3));
 $query = $this->db->get('table');
 return $query->result();
 }

 function get_entries()
 {
 $this->db->order_by('field','asc');
 $query = $this->db->get('table');
 return $query->result();
 }
	
 function get_count()
 {
 $query = $this->db->count_all();
 }

 // database functions

 function insert_entry()
 {
 $data = array(
  'name' => $this->input->post('name',true),
  'telephone' => $this->input->post('telephone',true),
  'email' => $this->input->post('email',true),
  'notes' => $this->input->post('notes',true));
 $this->db->insert('table', $data);	
 }

 function delete_entry()
 {
 $this->db->where('id', $this->uri->segment(3));
 $this->db->delete('table');	
 }

 function update_entry()
 {
 $data = array(
  'field1' => $this->input->post('field1',true),
  'field2' => $this->input->post('field2',true));    
 $this->db->where('id', $this->uri->segment(3));
 $this->db->update('table', $data);
 }

}

/* End of file Class_model.php */
/* Location: ./application/models/Class_model.php */
