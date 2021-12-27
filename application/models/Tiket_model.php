<?php 
class Tiket_model extends CI_Model{
    public function ambilSemuaTiket(){
        return $this->db->get('tiket')->result_array();
    }

    public function ambilKota(){
        return $this->db->get('kota')->result_array();
    }

    public function tambahTiket(){
        $data = [
            "asal" => $this->input->post('asal', true),
            "tujuan" => $this->input->post('tujuan', true),
            "tanggal" => $this->input->post('tanggal', true),
            "jadwal" => $this->input->post('jadwal', true),
            "harga" => $this->input->post('harga', true),
            "seat" => $this->input->post('seat', true),
            "j_keberangkatan" => $this->input->post('j_keberangkatan', true)
        ];

        $this->db->insert('tiket', $data);
    }

    public function getTiketById($id){
        return $this->db->get_where('tiket', ['id_tiket' => $id])->row_array();
    }

    public function ubahTiket(){
        $data = [
            "asal" => $this->input->post('asal', true),
            "tujuan" => $this->input->post('tujuan', true),
            "tanggal" => $this->input->post('tanggal', true),
            "jadwal" => $this->input->post('jadwal', true),
            "harga" => $this->input->post('harga', true),
            "seat" => $this->input->post('seat', true),
            "j_keberangkatan" => $this->input->post('j_keberangkatan', true)
        ];
        $this->db->where('id_tiket', $this->input->post('id_tiket'));
        $this->db->update('tiket', $data);
    }

    public function hapusTiket($id){
        $this->db->where('id_tiket', $id);
        $this->db->delete('tiket');
    }
}

?>