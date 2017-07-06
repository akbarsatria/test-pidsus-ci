<?php

class Rp2 extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/tabel_kasus'));
        $this->load->model(array('admin/tabel_subyek'));
        $this->load->model(array('admin/tabel_surat'));
        $this->load->model(array('admin/tabel_obyek'));
        $this->load->model(array('admin/detail_kasus_subyek'));
        $this->load->model(array('admin/detail_kasus_obyek'));
        $this->load->model(array('admin/detail_kasus_jaksa'));
        $this->load->model(array('admin/detail_kasus_surat'));
    }

    public function index() {
        $detail_kasus_obyek = $this->detail_kasus_obyek->get_detail_obyek();
        $data['detail_kasus_obyek'] = $detail_kasus_obyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2/perkara_penyelidikan_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {

    	if ($this->input->post('tanggal_surat') && $this->input->post('obyek_pidana')) {
    		//update tabel kasus
    		$id_kasus = $this->input->post('kasus');
    		$data_kasus['judul_kasus'] = $this->input->post('judul_kasus');
            $data_kasus['kasus_posisi'] = $this->input->post('kasus_posisi');
            $data_kasus['lokasi_kejadian'] = $this->input->post('lokasi_kejadian');
            $data_kasus['status'] = 'RP2';
            $this->tabel_kasus->update($data_kasus, $id_kasus);

    		//update tabel subyek
    		$id_subyek = $this->input->post('subyek');
    		$data_subyek['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data_subyek['lembaga'] = $this->input->post('lembaga');
            $data_subyek['kategori_subyek'] = $this->input->post('kategori_subyek');
            $this->tabel_subyek->update($data_subyek, $id_subyek);
    		
    		//insert tabel surat
            $data_surat['tanggal_surat'] = $this->input->post('tanggal_surat');
            $last_id_surat = $this->tabel_surat->insert($data_surat);
        	$data_surat['id_surat'] = $last_id_surat;
            $this->tabel_surat->update($data_surat, $last_id_surat);

            //insert tabel detail kasus surat
            $data_detail_surat['id_kasus'] = $id_kasus;
        	$data_detail_surat['id_surat'] = $last_id_surat;
        	$data_detail_surat['status'] = 'RP2';
        	$this->detail_kasus_surat->insert($data_detail_surat);

        	//insert tabel obyek
        	$data_obyek['obyek_pidana'] = $this->input->post('obyek_pidana');
        	$data_obyek['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $last_id_obyek = $this->tabel_obyek->insert($data_obyek);
        	$data_obyek['id_obyek'] = $last_id_obyek;
            $this->tabel_obyek->update($data_obyek, $last_id_obyek);

        	//insert tabel detail kasus obyek
            $data_detail_obyek['id_kasus'] = $id_kasus;
            $data_detail_obyek['id_obyek'] = $last_id_obyek;
        	$data_detail_obyek['id_subyek'] = $id_subyek;
        	$this->detail_kasus_obyek->insert($data_detail_obyek);

        	//insert tabel detail kasus obyek
         //    $data_detail_jaksa['id_kasus'] = $id_kasus;
        	// $data_detail_jaksa['id_jaksa'] = $this->input->post('jaksa_koordinator');
        	// $this->detail_kasus_jaksa->insert($data_detail_jaksa);


    		redirect('/admin/register/rp2', 'refresh');

    	}


        // $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2/perkara_penyelidikan_geledah";
        // $this->load->view($this->_container, $data);
    }

    public function create_sprint_lidik($id) {
        if ($this->input->post('tanggal_surat') && $this->input->post('nama_terlapor')) {
            $id_kasus = $this->input->post('kasus');
            $id_obyek = $this->input->post('obyek');

            // add to table subyek
            $data_subyek['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data_subyek['lembaga'] = $this->input->post('lembaga');
            $data_subyek['disposisi'] = $this->input->post('disposisi');
            
            $last_id_subyek = $this->tabel_subyek->insert($data_subyek);
            $data_subyek['id_subyek'] = $last_id_subyek;
            $this->tabel_subyek->update($data_subyek, $last_id_subyek);
            // end add to table subyek

            // add table surat
            $data_surat['no_surat'] = $this->input->post('no_surat');
            $data_surat['tanggal_surat'] = $this->input->post('tanggal_kejadian');

            $last_id_surat = $this->tabel_surat->insert($data_surat);
            $data_surat['id_surat'] = $last_id_surat;
            $this->tabel_subyek->update($data_surat, $last_id_surat);

            //insert tabel detail kasus surat
            $data_detail_surat['id_kasus'] = $last_id_kasus;
            $data_detail_surat['id_surat'] = $last_id_surat;
            $data_detail_surat['status'] = 'kasus';

            $this->detail_kasus_surat->insert($data_detail_surat);

            //add to tabel detail obyek
            $data_detail_obyek['id_kasus'] = $id_kasus;
            $data_detail_obyek['id_obyek'] = $id_obyek;
            $data_detail_obyek['id_subyek'] = $last_id_subyek;
            $this->detail_kasus_obyek->insert($data_detail_obyek);
            // end add to table detail obyek
        }


        $create_sprint_lidik = $this->detail_kasus_obyek->get_detail_obyek_edit($id);
        $data['detail_kasus_obyek'] = $create_sprint_lidik;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2/create_sprint_lidik";
        $this->load->view($this->_container, $data);
    }

    public function geledah() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2/perkara_penyelidikan_geledah";
        $this->load->view($this->_container, $data);
    }

    public function naik_dik_mum() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_penyidikan_umum_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2/perkara_penyelidikan_geledah";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->jaksa->delete($id);

        redirect('/admin/register/rp2', 'refresh');
    }

}
