<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ppkb extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('ppkb')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function total()
    {
        $data = $this->db->get('ppkb')->num_rows();
        return (count((array)$data) > 0) ? $data : false;
    }


    public function insert($data)
    {
        return ($this->db->insert('ppkb', $data)) ? true : false;
    }

    public function insert_batch($data)
    {
        return ($this->db->insert_batch('ppkb', $data)) ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('ppkb', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id', $id)->delete('ppkb')) ? true : false;
    }

    public function getOne($id)
    {
        $this->db->where('ppkb_number', $id);
        $data = $this->db->get('ppkb')->row_array();
        return (!empty($data)) ? $data : false;
    }

    public function getOneByHeader($id)
    {
        $this->db->where('no_header', $id);
        $data = $this->db->get('ppkb')->row();
        return (count((array)$data) > 0) ? $data : false;
    }
}
