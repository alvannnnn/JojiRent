<?php defined('BASEPATH') or exit('No direct script access allowed');
class ModelMobil extends CI_Model
{
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
    }
}
