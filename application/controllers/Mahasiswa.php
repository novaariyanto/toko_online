<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class Mahasiswa extends CI_Controller
{
	public function index(){
		$this->load->model('Mahasiswa_model');
		$data = $this->Mahasiswa_model->getMahasiswa('mahasiswa');
		$num = $this->Mahasiswa_model->numRows('mahasiswa');
		$data = array('data' => $data,'num'=>$num);
		$this->load->view('mahasiswa', $data);
	}
	public function tambah(){
		$this->load->view('tambah');

	}

	public function insert(){
		$this->load->model('Mahasiswa_model');
		$data = array(
			'no_induk'=>$this->input->post('no'),
			'nama'=> $this->input->post('nama'),
			'alamat'=>$this->input->post('alamat')
			);
		$data = $this->Mahasiswa_model->insert('mahasiswa',$data);
		redirect(base_url(),'refresh');
	}
	public function hapus($id){
		$data = array(
			'no_induk' => $id
			);
		$this->load->model('Mahasiswa_model');
		$this->Mahasiswa_model->delete('mahasiswa',$data);
		redirect(base_url(),'refresh');
	}
	public function edit($id){
		$this->load->model('Mahasiswa_model');
		$where = array(
			'no_induk' => $id
			);
		$maha = $this->Mahasiswa_model->getWhere('mahasiswa',$where);
		$data = array(
			'no_induk'=>$maha[0]['no_induk'],
			'nama'=>$maha[0]['nama'],
			'alamat'=>$maha[0]['alamat']
			);
		$this->load->view('edit', $data);

	}
	public function update(){
		$data = array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat')
			);
		$where = array(
			'no_induk'=>$this->input->post('no')
			);
		$this->load->model('Mahasiswa_model');
		$res = $this->Mahasiswa_model->update('mahasiswa',$data,$where);
 if ($res>0) {
        redirect('mahasiswa/index','refresh');
    }
	}

}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */