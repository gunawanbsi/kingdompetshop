<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelHewan extends CI_Model
{
    protected $session;
    //manajemen hewan
    public function getHewan()
    {
        return $this->db->get('hewan');
    }
    public function getHewanWhere($where)
    {
        return $this->db->get_where('hewan', $where);
    }
    public function simpanHewan($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function updateHewan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapusHewan($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
        $this->db->where($where);
        }
        $this->db->from('hewan');
        return $this->db->get()->row($field);
    }

    public function detailHewan($id){
        $result = $this->db->where('id', $id)->get('hewan');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
 
    //manajemen species
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    public function KategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }
    public function simpanKategori($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapusKategori($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function updateKategori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}