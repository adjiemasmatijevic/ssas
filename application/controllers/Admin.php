<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ppkb');
        $this->load->model('M_kategori_transaksi');
        $this->load->model('M_header_transaksi');
        $this->load->model('M_ship');
        $this->load->model('M_agents');
        $this->load->helper(array('file', 'form', 'url', 'download'));
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        // $this->load->view('admin/templates/header', $data);
        // $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/dashboard', $data);
    }

    public function ppkb()
    {
        $data['ppkb'] = $this->M_kategori_transaksi->all();
        $data['header'] = $this->M_header_transaksi->all();
        $data['title'] = 'Dashboard';
        // $this->load->view('admin/templates/header', $data);
        // $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/ppkb', $data);
        // $this->load->view('admin/templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Dashboard';
        $data['ppkb_number'] = $this->generate_ppkb_number();
        $data['kategori'] = $this->session->flashdata('kategori_data');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/tambah_ppkb', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_category()
    {
        $random = 'HDR-' . rand(1000, 9999);
        $data['title'] = 'Dashboard';
        $data['random'] = $random;
        $data['ssas_code'] = $this->generate_ssas_code();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/tambah_category', $data);
        $this->load->view('admin/templates/footer');
    }


    public function insert_category()
    {
        $ssas_code = $this->input->post('ssas_code');
        $nama_agen = $this->input->post('nama_agen');
        $tipe_kapal = $this->input->post('tipe_kapal');
        $datenow = date('Y-m-d H:i:s');
        $random = $this->input->post('no_header');


        $data_kategori = [
            'kd_trx'       => $ssas_code,
            'customer_id'  => 20,
            'start_date'   => $datenow,
            'status'       => 'Masuk'
        ];
        $this->M_kategori_transaksi->insert($data_kategori);

        $data_header = [
            'kategori_trx_id' => $ssas_code,
            'agent_id'        => $nama_agen,
            'no_header'       => $random,
            'header_date'     => $datenow,
            'status'          => 'Masuk',
        ];
        $this->M_header_transaksi->insert($data_header);

        $this->session->set_flashdata('kategori_data', [
            'ssas_code'  => $ssas_code,
            'nama_agen'  => $nama_agen,
            'tipe_kapal' => $tipe_kapal,
            'no_header'  => $random,
        ]);

        redirect('admin/tambah');
    }
    public function preview_ppkb()
    {
        $ppkb_data = $this->input->post();

        // Upload file jika ada di tahap awal
        $ship_file = $this->upload_file('ship_particular_file');
        $tonnage_certificate = $this->upload_file('tonnage_certificate');

        if ($ship_file) {
            $ppkb_data['ship_particular_file'] = $ship_file;
        }
        if ($tonnage_certificate) {
            $ppkb_data['tonnage_certificate'] = $tonnage_certificate;
        }

        $this->session->set_userdata('ppkb_temp', $ppkb_data);

        $data['ppkb'] = $ppkb_data;
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/ppkb_preview', $data);
        $this->load->view('admin/templates/footer');
    }
    public function show()
    {
        $id = $this->input->get('id'); // Ambil dari query string
        if (!$id) {
            show_404();
            return;
        }

        $ppkb = $this->M_ppkb->getOne($id);
        if (!$ppkb) {
            show_404();
            return;
        }

        $imo = $ppkb['IMO'];
        $agent = $ppkb['agent_name'];
        $agent = $this->M_agents->getOne($agent);
        $ship = $this->M_ship->getOne($imo);
        $no_header = $ppkb['no_header'];
        $ssas_code = $this->M_header_transaksi->getOne($no_header)->kategori_trx_id;
        $kategori = $this->M_kategori_transaksi->getOne($ssas_code);

        $data = [
            'ppkb' => $ppkb,
            'ship' => $ship,
            'agent' => $agent,
            'kategori' => $kategori
        ];

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/show', $data);
        $this->load->view('admin/templates/footer');
    }



    public function insert_ppkb()
    {
        $ppkb = $this->session->userdata('ppkb_temp');
        $random = 'SHPA-' . rand(1000, 9999);

        $imo = $ppkb['imo_mmsi'];
        $ship_name = $ppkb['ship_name'];
        $call_sign = $ppkb['call_sign'];
        $master_name = $ppkb['master_name'];
        $agent_name = $ppkb['agent_name'];
        $vessel_mov = $ppkb['vessel_movement'];
        $route = $ppkb['route'];

        // Ship Particular
        $ship_data = [
            'IMO' => $imo,
            'ship_name' => $ship_name,
            'call_sign' => $call_sign,
            'ship_owner' => $ppkb['ship_owner'],
            'flag' => $ppkb['flag'],
            'GT' => $ppkb['gt'],
            'LOA' => $ppkb['loa'],
            'anchor_point' => $ppkb['anchor_point'],
            'breadth' => $ppkb['breadth'],
            'DWT' => $ppkb['dwt'],
            'air_craft' => $ppkb['air_draft'],
            'max_craft' => $ppkb['max_draft'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Cek apakah kapal sudah ada
        $ship_exists = $this->M_ship->get_by_imo($imo);
        if (!$ship_exists) {
            $this->M_ship->insert($ship_data);
        }

        // Ship Particular
        $agent_data = [
            'agent_code' => $random,
            'name' => $ppkb['agent_name'],
            'phone' => $ppkb['phone'],
            'office_phone' => $ppkb['phone'],
            'PIC' => $ppkb['pic'],
            'NPWP' => $ppkb['npwp'],
            'email' => $ppkb['email'],
            'address' => $ppkb['company_address'],
            'updated_at' => date('Y-m-d H:i:s')
        ];
        // Cek apakah agent sudah ada
        $agent_exists = $this->M_agents->get_by_name($agent_name);
        if (!$agent_exists) {
            $this->M_agents->insert($agent_data);
        }

        // Upload file jika ada
        $ship_file = $this->upload_file('ship_particular_file');
        $tonnage_certificate = $this->upload_file('tonnage_certificate');
        $ppkb_data['ship_particular_file'] = $ship_file;
        $ppkb_data['tonnage_certificate'] = $tonnage_certificate;


        // Insert ke PPKB
        $ppkb_data = [
            'IMO' => $imo,
            'no_header' => $ppkb['no_header'],
            'ppkb_number' => $ppkb['ppkb_number'],
            'ship_name' => $ship_name,
            'call_sign' => $call_sign,
            'master_name' => $master_name,
            'agent_name' => $agent_name,
            'vessel_movement' => $vessel_mov,
            'route' => $route,
            'port_registry' => $ppkb['port_registry'],
            'charter' => $ppkb['charter'],
            'ship_file' => $ppkb['ship_particular_file'],
            'tonnage_certificate' => $ppkb['tonnage_certificate'],
            'cargo_type' => $ppkb['cargo_type'],
            'geared' => $ppkb['geared'],
            'qty_crane' => $ppkb['qty_crane'],
            'SWL' => $ppkb['swl'],
            'last_port' => $ppkb['last_port'],
            'next_port' => $ppkb['next_port'],
            'ETA' => $ppkb['eta'],
            'ETD' => $ppkb['etd'],
            'cargo_loading' => $ppkb['cargo_info'],
            'shipper' => $ppkb['shipper'],
            'kind_cargo' => $ppkb['kind_cargo'],
            'qty' => $ppkb['qty'],
            'unit' => $ppkb['unit'],
            'stevedoring' => $ppkb['stevedoring'],
            'loading_point' => $ppkb['loading_point'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->M_ppkb->insert($ppkb_data);

        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('admin/ppkb');
    }

    public function delete()
    {
        $id = $this->input->get('id', true);
        // Validasi ID
        if (!$id) {
            $this->session->set_flashdata('error', 'ID tidak ditemukan.');
            redirect('admin/ppkb');
            return;
        }

        $this->load->model('M_kategori_transaksi');
        $this->load->model('M_header_transaksi');

        $this->db->trans_begin();

        $deleteKategori = $this->M_kategori_transaksi->delete($id);
        $deleteHeader = $this->M_header_transaksi->delete($id);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        } else {
            $this->db->trans_commit();
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        }

        redirect('admin/ppkb');
    }



    public function upload_file($field_name)
    {
        if (!empty($_FILES[$field_name]['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 3072; // 3MB
            $this->load->library('upload', $config);
            if ($this->upload->do_upload($field_name)) {
                return $this->upload->data('file_name');
            }
        }
        return null;
    }

    public function generate_ssas_code()
    {
        $bulan = date('n'); // 1-12
        $tahun = date('Y');
        $romawi = [
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X',
            11 => 'XI',
            12 => 'XII'
        ];
        $bulan_romawi = $romawi[$bulan];

        $this->db->where('MONTH(start_date)', $bulan);
        $this->db->where('YEAR(start_date)', $tahun);
        $count = $this->db->count_all_results('kategori_transaksi');

        $next_number = $count + 1;
        $number = str_pad($next_number, 4, '0', STR_PAD_LEFT);

        return "{$number}/WED/{$bulan_romawi}/{$tahun}";
    }

    public function generate_ppkb_number()
    {
        $bulan = date('n'); // 1-12
        $tahun = date('Y');
        $romawi = [
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X',
            11 => 'XI',
            12 => 'XII'
        ];
        $bulan_romawi = $romawi[$bulan];

        // Hitung jumlah PPKB di bulan ini
        $this->db->where('MONTH(created_at)', $bulan);
        $this->db->where('YEAR(created_at)', $tahun);
        $count = $this->db->count_all_results('ppkb');

        // Urutkan nomor kumulatif
        $next_number = $count + 1;
        $number = str_pad($next_number, 4, '0', STR_PAD_LEFT);

        // Return format PPKB Number
        return "{$number}/LLL.IDWED/PPKB/{$bulan_romawi}/{$tahun}";
    }
}