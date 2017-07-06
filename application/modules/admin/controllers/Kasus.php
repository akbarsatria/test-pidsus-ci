<?php

class Kasus extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/tabel_kasus'));
        $this->load->model(array('admin/tabel_subyek'));
        $this->load->model(array('admin/tabel_surat'));
        $this->load->model(array('admin/detail_kasus_subyek'));
        $this->load->model(array('admin/detail_kasus_surat'));
    }

    public function index() {
    	$allkasus = $this->detail_kasus_subyek->get_detail_kasus();
    	$data['detail_kasus_subyek'] = $allkasus;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_list";
        $this->load->view($this->_container, $data);
    }

    // public function create() {
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_create";
    //     $this->load->view($this->_container, $data);
    // }

    public function create() {
        if ($this->input->post('judul_kasus') && $this->input->post('nama_terlapor')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['kasus_posisi'] = $this->input->post('kasus_posisi');
            $data['nama_lengkap'] = $this->input->post('nama_lengkap');
            $data['alamat'] = $this->input->post('alamat');
            $data['kota'] = $this->input->post('kota');
            $data['kodepos'] = $this->input->post('kodepos');
            $data['profinsi'] = $this->input->post('profinsi');
            $data['tlp'] = $this->input->post('tlp');
            $data['hp'] = $this->input->post('hp');
            $data['email'] = $this->input->post('email');
            $data['status'] = 'kasus';
            // $data['tanggal_kejadian'] = $this->input->post('tanggal_kejadian');
            // $data['lokasi_kejadian'] = $this->input->post('lokasi_kejadian');
            // $data['no_surat'] = $this->input->post('no_surat');
            // $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            // $data['disposisi'] = $this->input->post('disposisi');
            // $data['kasus_posisi'] = $this->input->post('kasus_posisi');
            // $data['kesimpulan'] = $this->input->post('kesimpulan');
            // $data['saran'] = $this->input->post('saran');
            // $data['id_surat'] = $this->input->post('id_surat');

            $last_id_kasus = $this->tabel_kasus->insert($data);
            $data['id_kasus'] = $last_id_kasus;
            $this->tabel_kasus->update($data, $last_id_kasus);
            
            // add Table Subyek
            $data_subyek['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data_subyek['lembaga'] = $this->input->post('lembaga');
        	
        	$last_id_subyek = $this->tabel_subyek->insert($data_subyek);
            $data_subyek['id_subyek'] = $last_id_subyek;
            $this->tabel_subyek->update($data_subyek, $last_id_subyek);

        	// Add table detail kasus subyek
        	$data_detail['id_kasus'] = $last_id_kasus;
        	$data_detail['id_subyek'] = $last_id_subyek;
        	$this->detail_kasus_subyek->insert($data_detail);

        	// add table surat
        	$data_surat['no_surat'] = $this->input->post('no_surat');
        	$data_surat['tanggal_surat'] = $this->input->post('tanggal_surat');
        	$last_id_surat = $this->tabel_surat->insert($data_surat);
        	$data_surat['id_surat'] = $last_id_surat;
            $this->tabel_surat->update($data_surat, $last_id_surat);

            //insert tabel detail kasus surat
        	$data_detail_surat['id_kasus'] = $last_id_kasus;
        	$data_detail_surat['id_surat'] = $last_id_surat;
            $data_detail_surat['asal_surat'] = $this->input->post('asal_surat');
            $data_detail_surat['diterima_tanggal'] = $this->input->post('diterima_tanggal');
            $data_detail_surat['pembuat_catatan'] = $this->input->post('pembuat_catatan');
        	$data_detail_surat['status'] = 'kasus';
        	$this->detail_kasus_surat->insert($data_detail_surat);

            redirect('/admin/register/kasus', 'refresh');

        }

        // $surats = $this->surat->get_all();

        // $data['surats'] = $surats;
        // $pidanas = $this->pidana->get_all();

        // $data['pidanas'] = $pidanas;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {

        $kasus = $this->tabel_kasus->get($id);
        $subyek = $this->tabel_subyek->get($id);
        $data['kasus'] = $kasus;
        $data['subyek'] = $subyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_edit";
        $this->load->view($this->_container, $data);
    }

    public function naik_lidik($id) {
    	// echo $result;
        $naik_lidik = $this->detail_kasus_subyek->get_detail_edit($id);
        $data['detail_kasus_subyek'] = $naik_lidik;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_penyelidikan_create";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        // $this->tabel_kasus->delete($id);
        // $this->tabel_subyek->delete($id);
        // $this->tabel_surat->delete($id);
        // $this->detail_kasus_subyek->delete($id);
        // $this->detail_kasus_surat->delete($id);

        redirect('/admin/administrasi/pasal', 'refresh');
    }

}