<?php defined('BASEPATH') or exit('No direct script access allowed');
class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek_login();
    }

    // public function ubahMobil()
    // {
    //     $data['judul'] = 'Ubah Data Mobil';
    //     $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    //     $data['mobil'] = $this->ModelMobil->mobilWhere(['id_mobil' => $this->uri->segment(3)])->result_array();
    //     $kategori_mobil = $this->ModelMobil->joinKategoriMobil(['mobil.idkategori_mobil' => $this->uri->segment(3)])->result_array();
    //     foreach ($kategori_mobil as $km) {
    //         $data['idkategori_mobil'] = $km['idkategori_mobil'];
    //     }
    //     $data['idkategori_mobil'] = $this->ModelMobil->getKategori()->result_array();
    //     $this->form_validation->set_rules('namakategori_mobil', 'Nama Mobil', 'required|min_length[3]');
    //     $this->form_validation->set_rules('transmisikategori_mobil', 'Transmisi Mobil', 'required');
    //     $this->form_validation->set_rules('hargakategori_mobil', 'Harga Sewa Mobil', 'required|min_length[3]|numeric');
    //     $config['upload_path'] = './assets/img/upload/';
    //     $config['allowed_types'] = 'jpg|png|jpeg';
    //     $config['max_size'] = '3000';
    //     $config['max_width'] = '5000';
    //     $config['max_height'] = '3000';
    //     $config['file_name'] = 'img' . time();
    //     //memuat atau memanggil library upload 
    //     $this->load->library('upload', $config);
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar_admin', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('mobil/ubahmobil', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         if ($this->upload->do_upload('image')) {
    //             $image = $this->upload->data();
    //             unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
    //             $gambar = $image['file_name'];
    //         } else {
    //             $gambar = $this->input->post('old_pict', TRUE);
    //         }
    //         $data = [
    //             'nama_mobil' => $this->input->post('nama_mobil', true),
    //             'transmisi_mobili' => $this->input->post('transmisi_mobil', true),
    //             'hargasewa_mobil' => $this->input->post('hargasewa_mobil', true),
    //             'foto_mobil' => $gambar
    //         ];
    //         $this->ModelMobil->updateMobil($data, ['id_mobil' => $this->input->post('id')]);
    //         redirect('mobil');
    //     }
    // }
    public function ubahMobil($id_mobil)
    {
        $this->ModelMobil->ubahMobil($id_mobil);
        redirect('mobil/tambahMobil');
    }

    public function hapusMobil($id_mobil)
    {
        $this->ModelMobil->hapusMobil($id_mobil);
        redirect('mobil/tambahMobil');
    }

    public function tambahMobil()
    {
        $data['judul'] = 'Tambah Mobil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['daftar_mobil'] = $this->ModelMobil->getMobil();
        $this->form_validation->set_rules('nama', 'Nama Mobil', 'required|min_length[3]');
        $this->form_validation->set_rules('transmisi', 'Transmisi Mobil', 'required');
        $this->form_validation->set_rules('harga', 'Harga Sewa Mobil', 'required|min_length[3]|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mobil/form_tambah_mobil', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_mobil' => $this->input->post('nama'),
                'transmisi_mobil' => $this->input->post('transmisi'),
                'hargasewa_mobil' => $this->input->post('harga'),
                'foto_mobil' => 'avanza.png',
            ];
            $this->ModelMobil->simpanMobil($data);
            redirect('mobil/tambahMobil');
        }
    }

    // public function hapusKategori()
    // {
    //     $where = ['idkategori_mobil' => $this->uri->segment(3)];
    //     $this->ModelMobil->hapusKategori($where);
    //     redirect('mobil/kategori');
    // }
    //manajemen Mobil 
    public function index()
    {
        $data['judul'] = 'Data Mobil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->ModelMobil->getMobil()->result_array();
        $data['kategori_mobil'] = $this->ModelMobil->getKategori()->result_array();
        $this->form_validation->set_rules('nama_mobil', 'nama_mobil', 'required|min_length[3]');
        $this->form_validation->set_rules('transmisi_mobil', 'transmisi_mobil', 'required');
        $this->form_validation->set_rules('hargasewa_mobil', 'hargasewa_mobil', 'required|min_length[3]|numeric'); //konfigurasi sebelum gambar diupload 
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '5000';
        $config['max_height'] = '3000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admindmin', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mobil/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'nama_mobil' => $this->input->post('nama_mobil', true),
                'transmisi_mobili' => $this->input->post('transmisi_mobil', true),
                'hargasewa_mobil' => $this->input->post('hargasewa_mobil', true),
                'foto_mobil' => $gambar
            ];
            $this->ModelMobil->simpanMobil($data);
            redirect('mobil');
        }
    }
}
