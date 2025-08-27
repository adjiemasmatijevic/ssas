<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('users')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function total()
    {
        $data = $this->db->get('users')->num_rows();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function insert($data)
    {
        return ($this->db->insert('users', $data)) ? true : false;
    }

    public function insert_batch($data)
    {
        return ($this->db->insert_batch('users', $data)) ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('users', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id', $id)->delete('users')) ? true : false;
    }

    public function getOne($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('users')->row();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getLike($id)
    {
        $this->db->like('nama', $id, 'after');
        $data = $this->db->get('users')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }
}
