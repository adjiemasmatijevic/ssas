<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_login extends CI_Model
{
    public function validasi_adm($username, $password)
    {
        $data        = $this->db->get_where('users', array('username like binary' => $username))->result();

        if (count($data) === 1) {
            if (password_verify($password, $data[0]->password)) {
                return $dt         =    array(
                    'is_logged_in' =>    true,
                    'user_id'      =>    $data[0]->id,
                    'nama'         =>    $data[0]->nama_user,
                    'username'     =>    $username,
                    'phone'     =>    $data[0]->phone,
                    'jabatan'     =>      $data[0]->jabatan,
                    'cabang'     =>      $data[0]->cabang,
                    'role_id'     =>      $data[0]->role_id,
                    'status'      =>      $data[0]->status
                );
            } else {
                return 0;
            }
        }
    }
}
/* End of file M_login.php */
/* Location: ./application/models/M_login.php */