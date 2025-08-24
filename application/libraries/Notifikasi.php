<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Notifikasi untuk notifikasi
 */

/* End of file Notifikasi.php */
/* Location: ./application/libraries/Notifikasi.php */

class Notifikasi
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('session');

        //div notif
        $this->notifSukses = '
        <div id="notifikasi" class="d-flex justify-content-end mt-2 alert alert-success alert-dismissible fade show" style="position: fixed; z-index: 1; right: 20px;" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="icon fa fa-check"></i> Sukses !</strong> &nbsp;';

        $this->notifWarning = '
        <div id="notifikasi" class="d-flex justify-content-end mt-2 alert alert-warning alert-dismissible fade show" style="position: fixed; z-index: 1; right: 20px;" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="icon fa fa-check"></i> Perhatian !</strong> &nbsp;';

        $this->notifInfo = '
        <div id="notifikasi" class="d-flex justify-content-end mt-2 alert alert-info alert-dismissible fade show" style="position: fixed; z-index: 1; right: 20px;" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="icon fa fa-check"></i> Info !</strong> &nbsp;';

        $this->notifGagal = '
        <div class="d-flex justify-content-end mt-2 alert alert-danger alert-dismissible fade show" style="position: fixed; z-index: 1; right: 20px;" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="icon fa fa-ban"></i> Gagal !</strong> &nbsp;';

        $this->loginGagal = '
        <div class="d-flex justify-content-center alert alert-danger alert-dismissible fade show" style="position: relative; z-index: 1;" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="icon fa fa-ban"></i> Gagal !</strong> &nbsp;';

        $this->notifClose = '</div>';
    }

    public function suksesInput($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Input." . $param . $this->notifClose);
    }

    public function suksesAdd($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Menambahkan Data." . $param . $this->notifClose);
    }

    public function berhasilAdd($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Menambahkan Tiket." . $param . $this->notifClose);
    }

    public function suksesImport($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Import Data." . $param . $this->notifClose);
    }

    public function gagalImport($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Import Data." . $param . $this->notifClose);
    }

    public function gagalAdd($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Menambahkan Data." . $param . $this->notifClose);
    }

    public function gagalUpload($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Ukuran Gambar Terlalu Besar." . $param . $this->notifClose);
    }

    public function suksesEdit($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Edit Data." . $param . $this->notifClose);
    }

    public function gagalEdit($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Edit Data." . $param . $this->notifClose);
    }

    public function suksesHapus($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Hapus Data." . $param . $this->notifClose);
    }

    public function gagalHapus($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Hapus Data." . $param . $this->notifClose);
    }

    public function gagalDownload($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " tidak ada." . $param . $this->notifClose);
    }

    public function updateBio($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Biodata disimpan." . $param . $this->notifClose);
    }

    public function updateProfil($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Update profil." . $param . $this->notifClose);
    }

    public function todoProfil($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifWarning . " Silakan update profil anda." . $param . $this->notifClose);
    }

    public function updatePass($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . " Password baru disimpan." . $param . $this->notifClose);
    }

    public function wrongPass($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Password tidak sesuai." . $param . $this->notifClose);
    }

    public function valdasiError($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . $param . $this->notifClose);
    }

    public function failLogin($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->loginGagal . " Data Login Tidak Valid. <p>" . $param . $this->notifClose);
    }

    public function suksesEmail($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifSukses . "Data Berhasil Dikirim via Email ke " . $param . $this->notifClose);
    }
    public function gagalEmail($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifGagal . " Data Gagal Dikirim via Email ke " . $param . $this->notifClose);
    }
    public function dakung_multi($param = "")
    {
        return $this->CI->session->set_flashdata('notif', $this->notifInfo . " Upload Data" . $param . $this->notifClose);
    }
}
