<main class="col-md-10 ms-sm-auto px-md-4">


    <div class="container">
        <h3>Review Ship Particular & PPKB</h3>
        <table class="table table-bordered">
            <tr>
                <th>SSAS Code</th>
                <td><?= $kategori['kd_trx']; ?></td>
            </tr>
            <tr>
                <th>Header Number</th>
                <td><?= $ppkb['no_header']; ?></td>
            </tr>
            <tr>
                <th>Nama Agen Kapal</th>
                <td><?= $agent['name']; ?></td>
            </tr>
            <tr>
                <th>Tipe Kapal</th>
                <td><?= $kategori['tipe_kapal']; ?></td>
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
                <td><?= $ppkb['IMO']; ?></td>
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
                <td><?= $ship->flag; ?></td>
            </tr>
            <tr>
                <th>GT</th>
                <td><?= $ship->GT ?></td>
            </tr>
            <tr>
                <th>DWT</th>
                <td><?= $ship->DWT ?></td>
            </tr>
            <tr>
                <th>LOA</th>
                <td><?= $ship->LOA ?></td>
            </tr>
            <tr>
                <th>Breadth</th>
                <td><?= $ship->breadth ?></td>
            </tr>
            <tr>
                <th>Air Draft</th>
                <td><?= $ship->air_craft ?></td>
            </tr>
            <tr>
                <th>Max Draft</th>
                <td><?= $ship->max_craft ?></td>
            </tr>
            <tr>
                <th>Ship Owner</th>
                <td><?= $ship->ship_owner ?></td>
            </tr>
            <tr>
                <th>Anchor Point</th>
                <td><?= $ship->anchor_point ?></td>
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
                <td><?= $ppkb['SWL']; ?></td>
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
                <td><?= $ppkb['ETA']; ?></td>
            </tr>
            <tr>
                <th>ETD</th>
                <td><?= $ppkb['ETD']; ?></td>
            </tr>
            <tr>
                <th>Cargo Info</th>
                <td><?= $ppkb['cargo_loading']; ?></td>
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
                <td><?= $agent['PIC']; ?></td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td><?= $agent['NPWP']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $agent['email']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?= $agent['phone']; ?></td>
            </tr>
            <tr>
                <th>Company Address</th>
                <td><?= $agent['address']; ?></td>
            </tr>
        </table>
        <div class="mt-3">
            <?php if (!empty($ppkb['ship_file'])): ?>
                <a href="<?= base_url('uploads/' . rawurlencode($ppkb['ship_file'])); ?>" target="_blank">

                    <button>View Ship Particular</button>
                </a>
            <?php endif; ?>

            <?php if (!empty($ppkb['tonnage_certificate'])): ?>
                <a href="<?= base_url('uploads/' . rawurlencode($ppkb['tonnage_certificate'])); ?>" target="_blank">
                    <button>View Tonnage Certificate</button>
                </a>
            <?php endif; ?>

            <a href="<?= base_url('admin/ppkb'); ?>">
                <button>Kembali</button>
            </a>
        </div>

    </div>


</main>