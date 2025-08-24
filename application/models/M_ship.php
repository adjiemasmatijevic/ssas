<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ship extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('ship')->result_array();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function total()
    {
        $data = $this->db->get('ship')->num_rows();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function get_by_imo($imo)
    {
        return $this->db->get_where('ship', ['IMO' => $imo])->row();
    }

    public function insert($data)
    {
        return ($this->db->insert('ship', $data)) ? true : false;
    }

    public function insert_batch($data)
    {
        return ($this->db->insert_batch('ship', $data)) ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('ship', $data);
        return ($update) ? true : false;
    }

    public function delete($id)
    {
        return ($this->db->where('id', $id)->delete('ship')) ? true : false;
    }

    public function getOne($id)
    {
        $this->db->where('IMO', $id);
        $data = $this->db->get('ship')->row();
        return (count((array)$data) > 0) ? $data : false;
    }
}
