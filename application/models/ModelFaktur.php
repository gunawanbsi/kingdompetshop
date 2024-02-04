<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelFaktur extends CI_Model
{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $faktur = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_pembayaran' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );
        $this->db->insert('faktur', $faktur);
        $id_faktur = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_faktur' => $id_faktur,
                'id_barang' => $item['id'],
                'nama_barang' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('detail_faktur', $data);
        }
        return TRUE;
    }

    public function tampilData(){
        $result = $this->db->get('faktur');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function ambilIdFaktur($id_faktur){
        $result = $this->db->where('id', $id_faktur)->limit(1)->get('faktur');
        if($result->num_rows() > 0){
            return $result->row();
        }
        else{
            return false;
        }
    }

    public function ambilIdDetFaktur($id_faktur){
        $result = $this->db->where('id_faktur', $id_faktur)->get('detail_faktur');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
}