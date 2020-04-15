<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_book extends CI_Controller {
	function Construct(){
		parent::_construct();
		$this->load->model('m_book');
	}

	public function index($offset=0)
	{
		$this->load->model('m_book');
		$data['type'] = 'show_book';
		$data['offset'] = $offset;
        $data['list'] = $this->m_book->list();
		$this->load->view('index', $data);
	}

	function add_book() {
		$data['type'] = 'add_book';
		$this->load->view('index', $data);	
	}

	function save(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('author', 'author', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Data Gagal Di Simpan, kemungkinan data sudah ada!</div>');
			redirect('c_book');		
		} else {				
			$this->load->model('m_book');
			$this->m_book->save();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Data Sukses Di Simpan</div>');
			redirect('c_book');
		}
	}

	function delete($id) {
		$this->db->where('id',$id);
		$this->db->delete('tb_book');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Data Sukses Di hapus</div>');
		redirect('c_book');	
	}

	function update_book($id) {
		if($_POST == NULL) {
			$this->load->model('m_book');
			$data['rows'] = $this->m_book->get_book($id);
			$data['id'] = $id; 
			$data['type'] = 'update_book';
			$this->load->view('index', $data);
		} else	{			
			$this->load->model('m_book');
			$this->m_book->update($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Data Sukses Di ubah</div>');
			redirect('c_book','refresh');
		}
	}

}
