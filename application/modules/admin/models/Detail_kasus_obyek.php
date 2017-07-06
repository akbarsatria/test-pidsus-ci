<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Detail_kasus_obyek extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_detail_obyek()
    {
    	$this->db->select('b.id `id_detail`,c.id_subyek `id_subyek`, a.judul_kasus `judul_kasus`, a.kasus_posisi `kasus_posisi`, c.nama_terlapor `nama_terlapor`');
            $this->db->from('tabel_kasus a'); 
            $this->db->join('detail_kasus_obyeks b', 'b.id_kasus = a.id_kasus','right');
            $this->db->join('tabel_subyeks c', 'c.id_subyek= b.id_subyek','left');
            $this->db->join('tabel_obyeks d', 'd.id_obyek= b.id_obyek', 'left');
            // $this->db->order_by('c.id_kasus','asc');         
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }

    }

    public function get_detail_obyek_edit($id)
    {
        $this->db->select('b.id `id_detail`,b.id_kasus `id_kasus`,b.id_obyek `id_obyek`, c.id_subyek `id_subyek`, a.judul_kasus `judul_kasus`, a.kasus_posisi `kasus_posisi`, d.obyek_pidana `obyek_pidana`, d.nilai_kontrak `nilai_kontrak`');
            $this->db->from('tabel_kasus a'); 
            $this->db->join('detail_kasus_obyeks b', 'b.id_kasus = a.id_kasus','right');
            $this->db->join('tabel_subyeks c', 'c.id_subyek= b.id_subyek','left');
            $this->db->join('tabel_obyeks d', 'd.id_obyek= b.id_obyek', 'left');
            // $this->db->order_by('c.id_kasus','asc');   
            $this->db->where('b.id', $id);     
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }

    }
}
