<main class="col-md-10 ms-sm-auto px-md-4">


    <div class="container">
        <h3>Review Ship Particular & PPKB</h3>
        <table class="table table-bordered">
            <tr>
                <th>SSAS Code</th>
                <td><?= $ppkb['ssas_code']; ?></td>
            </tr>
            <tr>
                <th>Header Number</th>
                <td><?= $ppkb['no_header']; ?></td>
            </tr>
            <tr>
                <th>Nama Agen Kapal</th>
                <td><?= $ppkb['nama_agen']; ?></td>
            </tr>
            <tr>
                <th>Tipe Kapal</th>
                <td><?= $ppkb['tipe_kapal']; ?></td>
            </tr>
            <tr>
                <th>PPKB Number</th>
                <td><?= $ppkb['ppkb_number']; ?></td>
            </tr>
            <tr>
                <th>Vessel Movement</th>
                <td><?= $ppkb['vessel_movement']; ?></td>
            </tr>
            <tr>
                <th>Route</th>
                <td><?= $ppkb['route']; ?></td>
            </tr>
            <tr>
                <th>IMO/MMSI</th>
                <td><?= $ppkb['imo_mmsi']; ?></td>
            </tr>
            <tr>
                <th>Ship Name</th>
                <td><?= $ppkb['ship_name']; ?></td>
            </tr>
            <tr>
                <th>Call Sign</th>
                <td><?= $ppkb['call_sign']; ?></td>
            </tr>
            <tr>
                <th>Flag</th>
                <td><?= $ppkb['flag']; ?></td>
            </tr>
            <tr>
                <th>GT</th>
                <td><?= $ppkb['gt']; ?></td>
            </tr>
            <tr>
                <th>DWT</th>
                <td><?= $ppkb['dwt']; ?></td>
            </tr>
            <tr>
                <th>LOA</th>
                <td><?= $ppkb['loa']; ?></td>
            </tr>
            <tr>
                <th>Breadth</th>
                <td><?= $ppkb['breadth']; ?></td>
            </tr>
            <tr>
                <th>Air Draft</th>
                <td><?= $ppkb['air_draft']; ?></td>
            </tr>
            <tr>
                <th>Max Draft</th>
                <td><?= $ppkb['max_draft']; ?></td>
            </tr>
            <tr>
                <th>Ship Owner</th>
                <td><?= $ppkb['ship_owner']; ?></td>
            </tr>
            <tr>
                <th>Anchor Point</th>
                <td><?= $ppkb['anchor_point']; ?></td>
            </tr>
            <tr>
                <th>Master Name</th>
                <td><?= $ppkb['master_name']; ?></td>
            </tr>
            <tr>
                <th>Charter</th>
                <td><?= $ppkb['charter']; ?></td>
            </tr>
            <tr>
                <th>Port Registry</th>
                <td><?= $ppkb['port_registry']; ?></td>
            </tr>
            <tr>
                <th>Cargo Type</th>
                <td><?= $ppkb['cargo_type']; ?></td>
            </tr>
            <tr>
                <th>Geared</th>
                <td><?= $ppkb['geared']; ?></td>
            </tr>
            <tr>
                <th>Quantity Crane</th>
                <td><?= $ppkb['qty_crane']; ?></td>
            </tr>
            <tr>
                <th>SWL</th>
                <td><?= $ppkb['swl']; ?></td>
            </tr>
            <tr>
                <th>Last Port</th>
                <td><?= $ppkb['last_port']; ?></td>
            </tr>
            <tr>
                <th>Next Port</th>
                <td><?= $ppkb['next_port']; ?></td>
            </tr>
            <tr>
                <th>ETA</th>
                <td><?= $ppkb['eta']; ?></td>
            </tr>
            <tr>
                <th>ETD</th>
                <td><?= $ppkb['etd']; ?></td>
            </tr>
            <tr>
                <th>Cargo Info</th>
                <td><?= $ppkb['cargo_info']; ?></td>
            </tr>
            <tr>
                <th>Loading Point</th>
                <td><?= $ppkb['loading_point']; ?></td>
            </tr>
            <tr>
                <th>Shipper</th>
                <td><?= $ppkb['shipper']; ?></td>
            </tr>
            <tr>
                <th>Kind Cargo</th>
                <td><?= $ppkb['kind_cargo']; ?></td>
            </tr>
            <tr>
                <th>Qty</th>
                <td><?= $ppkb['qty']; ?></td>
            </tr>
            <tr>
                <th>Unit</th>
                <td><?= $ppkb['unit']; ?></td>
            </tr>
            <tr>
                <th>Stevedoring</th>
                <td><?= $ppkb['stevedoring']; ?></td>
            </tr>
            <tr>
                <th>Other Service</th>
                <td><?= $ppkb['other_service']; ?></td>
            </tr>
            <tr>
                <th>Agent Name</th>
                <td><?= $ppkb['agent_name']; ?></td>
            </tr>
            <tr>
                <th>PIC</th>
                <td><?= $ppkb['pic']; ?></td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td><?= $ppkb['npwp']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $ppkb['email']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?= $ppkb['phone']; ?></td>
            </tr>
            <tr>
                <th>Company Address</th>
                <td><?= $ppkb['company_address']; ?></td>
            </tr>
        </table>
        <a href="<?= base_url('admin/tambah_ppkb'); ?>"><button>Edit</button></a>
        <a href="<?= base_url('admin/insert_ppkb'); ?>"><button>Simpan</button></a>
    </div>


</main>