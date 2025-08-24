<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_header_transaksi extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('header_transaksi')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function total()
    {
        $data = $this->db->get('header_transaksi')->num_rows();
        return (count((array)$data) > 0) ? $data : false;
    }


    public function insert($data)
    {
        return ($this->db->insert('header_transaksi', $data)) ? true : false;
    }

    public function insert_batch($data)
    {
        return ($this->db->insert_batch('header_transaksi', $data)) ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('header_transaksi', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id', $id)->delete('header_transaksi')) ? true : false;
    }

    public function getOne($id)
    {
        $this->db->where('no_header', $id);
        $data = $this->db->get('header_transaksi')->row();
        return (count((array)$data) > 0) ? $data : false;
    }
}
