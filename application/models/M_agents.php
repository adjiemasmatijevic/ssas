<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_agents extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('agents')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function total()
    {
        $data = $this->db->get('agents')->num_rows();
        return (count((array)$data) > 0) ? $data : false;
    }


    public function insert($data)
    {
        return ($this->db->insert('agents', $data)) ? true : false;
    }

    public function insert_batch($data)
    {
        return ($this->db->insert_batch('agents', $data)) ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('agents', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id', $id)->delete('agents')) ? true : false;
    }

    public function get_by_name($name)
    {
        return $this->db->get_where('agents', ['name' => $name])->row();
    }

    public function getOne($id)
    {
        $this->db->where('name', $id);
        $data = $this->db->get('agents')->row_array();
        return (count((array)$data) > 0) ? $data : false;
    }
}
