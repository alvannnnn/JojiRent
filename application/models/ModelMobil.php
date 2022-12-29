<?php defined('BASEPATH') or exit('No direct script access allowed');
class ModelMobil extends CI_Model
{ //manajemen buku 
    public function getMobil()
    {
        return $this->db->get('mobil')->result_array();
    }
    public function simpanMobil($data = null)
    {
        $this->db->insert('mobil', $data);
    }
    public function hapusMobil($id_mobil)
    {
        $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('mobil');
    }

    public function getMobilDetail($where)
    {
        $this->db->where('id_mobil', $where);
        return $this->db->get('mobil')->result_array();

        // return $this->db->get_where('mobil', $where);
    }
    // public function updateMobil($data = null, $where = null)
    // {
    //     $this->db->update('mobil', $data, $where);
    // }
    // public function hapusMobil($where = null)
    // {
    //     $this->db->delete('mobil', $where);
    // }
    // public function total($field, $where)
    // {
    //     $this->db->select_sum($field);
    //     if (!empty($where) && count($where) > 0) {
    //         $this->db->where($where);
    //     }
    //     $this->db->from('mobil');
    //     return $this->db->get()->row($field);
    // } //manajemen kategori 
    // public function getKategori_mobil()
    // {
    //     return $this->db->get('kategori_mobil');
    // }
    // public function kategori_mobilWhere($where)
    // {
    //     return $this->db->get_where('kategori_mobil', $where);
    // }
    // public function simpanKategori_mobil($data = null)
    // {
    //     $this->db->insert('kategori_mobil', $data);
    // }
    // public function updateKategori_mobil($where = null, $data = null)
    // {
    //     $this->db->update('kategori_mobil', $data, $where);
    // } //join
    // public function joinKategoriMobil($where)
    // {
    //     $this->db->select('mobil.idkategori_mobil,kategori_mobil.idkategori_mobil');
    //     $this->db->from('mobil');
    //     $this->db->join('kategori_mobil', 'kategori_mobil.idkategori_mobil = mobil.idkategori_mobil');
    //     $this->db->where($where);
    //     return $this->db->get();
    // }
}
