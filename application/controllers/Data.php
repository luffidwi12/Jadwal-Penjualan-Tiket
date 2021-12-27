<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Penjualan Tiket';
        $data['judul'] = 'Penjualan Tiket';

        $data['tiket'] = $this->Tiket_model->ambilSemuaTiket();
        $this->load->view('templates/header', $data);
        $this->load->view('data/data_tiket', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['title'] = 'Tambah tiket';
        $data['judul'] = 'Tambah Tiket';

        $data['kota'] = $this->Tiket_model->ambilKota();

        $this->form_validation->set_rules('asal', 'Asal', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('seat', 'Seat', 'required');
        $this->form_validation->set_rules('j_keberangkatan', 'J_keberangkatan', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('data/tambah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Tiket_model->tambahTiket();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('data');
        }
        
    }

    public function ubah($id){
        $data['title'] = 'Ubah Tiket';
        $data['tiket'] = $this->Tiket_model->getTiketById($id);
        $data['judul'] = 'Ubah Tiket';
        

        $data['kota'] = $this->Tiket_model->ambilKota();

        $this->form_validation->set_rules('asal', 'Asal', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('seat', 'Seat', 'required');
        $this->form_validation->set_rules('j_keberangkatan', 'J_keberangkatan', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('data/ubah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Tiket_model->ubahTiket();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('data');
        }
        
    }

    public function hapus($id){
        $this->Tiket_model->hapusTiket($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('data');
    }

    public function mpdf(){
        $mpdf = new \Mpdf\Mpdf();
        $dataTiket = $this->Tiket_model->ambilSemuaTiket();
        $data = $this->load->view('data/mpdf', ['semuaTiket' => $dataTiket], TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function excel(){
        $data['tiket'] = $this->Tiket_model->ambilSemuaTiket();
        $this->load->view('data/excel', $data);
    }
}