<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori_transaksi extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('kategori_transaksi')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function total()
    {
        $data = $this->db->get('kategori_transaksi')->num_rows();
        return (count((array)$data) > 0) ? $data : false;
    }


    public function insert($data)
    {
        return ($this->db->insert('kategori_transaksi', $data)) ? true : false;
    }

    public function insert_batch($data)
    {
        return ($this->db->insert_batch('kategori_transaksi', $data)) ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('kategori_transaksi', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('kd_trx', $id)->delete('kategori_transaksi')) ? true : false;
    }

    public function getOne($id)
    {
        $this->db->where('kd_trx', $id);
        $data = $this->db->get('kategori_transaksi')->row_array();
        return (count((array)$data) > 0) ? $data : false;
    }
    public function getOnebySass($id)
    {
        $this->db->where('kd_trx', $id);
        $data = $this->db->get('kategori_transaksi')->row();
        return (count((array)$data) > 0) ? $data : false;
    }
}
