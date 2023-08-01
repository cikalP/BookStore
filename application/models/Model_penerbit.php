<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Model_penerbit extends CI_Model{

    public function get_all_penerbit()
    {
        $this->db->select('*');
        $this->db->from('tb_penerbit');
        $query = $this->db->get();

        return $query;
    }

    public function  simpan_penerbit($data)
	{
		$this->db->insert('tb_penerbit',$data);
	}

    public function hapus_penerbit($kode)
    {
        $this->db->where('kode_penerbit',$kode);
        $query = $this->db->get('tb_buku');
        if($query->num_rows() > 0){
            //Data tidak dapat dihapus karna sudah dipakai tb_buku
            $this->session->set_flashdata('pesan', '<div class ="alert alert-warning" role="alert"> Data gagal dihapus, Penerbit sedang dipakai di Daftar Buku.</div>');
        }else{
            $this->db->where('kode_penerbit', $kode);
            $this->db->delete('tb_penerbit');
            //Data berhasil dihapus
            $this->session->set_flashdata('pesan', '<div class ="alert alert-danger" role="alert">Data berhasil dihapus.</div>');
        }
    
    }

    public function update_penerbit($kode,$data)
	{
		$this->db->where('kode_penerbit', $kode);
        $this->db->update('tb_penerbit', $data);
	}
    
    public function get_penerbit_by_code($kode)
    {
       return $this->db->get_where('tb_penerbit',array('kode_penerbit'=> $kode));
    }
}