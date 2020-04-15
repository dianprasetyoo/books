<?php
Class M_book extends CI_Model {


	function list(){
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('tb_book');			
		return $query->result();
	}
	
	function save(){
		$title = $this->input->post('title');
		$author = $this->input->post('author');
		$date_published = $this->input->post('date_published');
		$number_of_pages = $this->input->post('number_of_pages');
		$type = $this->input->post('type');
		$data = array(
		  'title'=>$title,
		  'author'=>$author,
		  'date_published'=>$date_published,
		  'number_of_pages'=>$number_of_pages,
		  'type'=>$type
		);
		
		$this->db->insert('tb_book',$data);	//insert penerima	
	}

	function get_book($id)
	{	
		$this->db->select('*');
		$this->db->from('tb_book');
		$this->db->where('id',$id);
		$Q = $this->db->get();

		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$data = $row;
			}
			} else{
				$data = null;
			}
		$Q->free_result();
		return $data;	
	}

	function update($id){
        $title = $this->input->post('title');
		$author = $this->input->post('author');
		$date_published = $this->input->post('date_published');
		$number_of_pages = $this->input->post('number_of_pages');
		$type = $this->input->post('type');
        $data = array(
			'title'=>$title,
			'author'=>$author,
			'date_published'=>$date_published,
			'number_of_pages'=>$number_of_pages,
			'type'=>$type 	  
    	);
		$this->db->where('id',$id);
		$this->db->update('tb_book',$data);
	}

}
?>