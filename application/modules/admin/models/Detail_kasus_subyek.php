<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Detail_kasus_subyek extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_detail_kasus()
        {
            $this->db->select('a.id `id_detail`,`judul_kasus`,`kasus_posisi`, `lokasi_kejadian`, `nama_terlapor`, `lembaga`, `kategori_subyek`, b.status');
            $this->db->from('detail_kasus_subyeks a'); 
            $this->db->join('tabel_kasus b', 'b.id_kasus=a.id_kasus', 'left');
            $this->db->join('tabel_subyeks c', 'c.id_subyek=a.id_subyek', 'left');
            $this->db->where('b.status', 'kasus');
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

    public function get_detail_edit($id)
    {	
    	$this->db->select('a.id `id_detail`,`a.id_kasus` `id_kasus`,`a.id_subyek` `id_subyek`,`judul_kasus`,`kasus_posisi`, `lokasi_kejadian`, `nama_terlapor`, `lembaga`, `kategori_subyek`');
            $this->db->from('detail_kasus_subyeks a'); 
            $this->db->join('tabel_kasus b', 'b.id_kasus=a.id_kasus', 'left');
            $this->db->join('tabel_subyeks c', 'c.id_subyek=a.id_subyek', 'left');
            $this->db->where('a.id', $id);
            $query = $this->db->get(); 
            // return $this->db->get_where('detail_kasus_subyeks', array('a.id' => $id))->row();
            // return $result = $query->result();

            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
    	// $query = $this->db->get_where('detail_kasus_subyeks', array('a.id' => $id));
    	// return $query->result_array($id);
    }
}