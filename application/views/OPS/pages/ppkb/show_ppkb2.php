<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php $this->load->view('admin/partial/head')  ?>
<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
    }

    /* Container Style */
    .container {
        margin: auto;
        background: white;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        height: auto;
    }

    .headline {
        text-align: center;
        margin-top: 30px;
    }

    .headline h1 {
        font-size: 30px;
        line-height: 1;
        font-weight: bold;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .headline h2 {
        font-size: 15px;
        font-weight: bold;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .headline h3 {
        font-size: 13px;
        font-style: italic;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .logo-lang {
        align-items: center;
        align-content: center;
        padding-left: 100px;
    }

    .logo-dis {
        align-items: center;
        align-content: center;
        padding-left: 100px;
    }

    hr {
        border: none;
        height: 15px;
        background-color: black;
    }

    .form-container {
        margin: 20px 100px 0px 100px;
    }

    .form-container h5 {
        font-size: 15px;
        font-weight: bold;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .form-container h5 span {
        font-weight: normal;
        font-style: italic;
    }

    .ppkb_number {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .ppkb_number h3 {
        font-size: 25px;
        font-weight: bold;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .data-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 6px;
        font-size: 18px;
        font-weight: normal;
    }

    .data-item span {
        font-weight: bold;
        margin-right: 10px;
    }

    .cargo {
        display: flex;
    }

    .cargo h3 {
        font-size: 20px;
        font-weight: bold;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .cargo h4 {
        font-size: 17px;
        font-style: italic;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .geared h4 {
        font-size: 17px;
        font-style: italic;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .loading-table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    .loading-table thead th {
        text-align: center;
        padding: 10px;
        background-color: #f4f4f4;
        color: #333;
        font-weight: bold;
        font-size: 16px;
        border: 1px solid black;
        border-bottom: 2px solid #ccc;
        /* garis bawah header */
    }

    .loading-table tbody td {
        border: 1px solid black;
        padding: 10px;
        font-size: 15px;
        color: #555;
        border-bottom: 1px solid black;
        /* garis tipis antar baris */
    }

    .loading-table tbody tr:nth-child(even) {
        background-color: #fafafa;
        /* zebra striping */
    }

    .loading-table tbody tr:hover {
        background-color: #f0f8ff;
        /* efek hover */
    }

    .footer-section {
        width: 100%;
        font-family: Arial, sans-serif;
        margin-top: 20px;
        font-size: 14px;
    }

    .top-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .company {
        font-weight: bold;
    }

    .ship-agent {
        text-align: center;
        font-size: 14px;
    }

    .date-info {
        text-align: right;
    }

    .footer-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .footer-table th {
        text-align: left;
        padding: 8px;
        background-color: #f4f4f4;
        font-weight: bold;
        border-bottom: 2px solid #000;
    }

    .footer-table td {
        vertical-align: top;
        padding: 8px;
        border-bottom: 1px solid #ccc;
        line-height: 1.5;
    }

    .button-comb {
        display: flex;
        gap: 20px;
    }
</style>

<body>
    <div class="container-scroller">
        <!-- navbar -->
        <?php $this->load->view('admin/partial/navbar')  ?>

        <div class="container-fluid page-body-wrapper">
            <!-- setting-panel -->
            <?php $this->load->view('admin/partial/setting-panel')  ?>
            <!-- menu sidebar -->
            <?php $this->load->view('admin/partial/sidebar')  ?>

            <div class="main-panel">
                <div class="container">
                    <div class="d-flex mb-2">
                        <div style="flex: 1" class="logo-dis">
                            <img src="<?= base_url('assets') ?>/preview/assets/dishub.png" width="100" alt="" />
                        </div>
                        <div style="flex: 2" class="headline">
                            <h1>PT. LANGLANG LAJU LAYANG</h1>
                            <h2>Requisition Vessel And Cargo Service</h2>
                            <h3>Permohonan Pelayanan Kapal dan Barang</h3>
                        </div>
                        <div style="flex: 1" class="logo-lang">
                            <img src="<?= base_url('assets') ?>/preview/assets/Logo-PT-Langlang.png" width="200" alt="" />
                        </div>
                    </div>
                    <div class="form-container">
                        <hr style="border: none; height: 3px; background-color: black" />
                        <h5>SHIP PARTICULAR BARGE<span> (DATA KAPAL BARGE)</span></h5>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <div class="ppkb_number">
                            <h3>NO PPKB</h3>
                            <h3>: <?= $ppkb['ppkb_number'] ?></h3>
                        </div>

                        <div class="row particular-form mt-3">
                            <!-- Kolom Kiri -->
                            <div class="col-6 forms-part">
                                <div class="data-item"><span>Ship Name:</span> <?= $ppkb['ship_name'] ?></div>
                                <div class="data-item"><span>IMO/MMSI Numb:</span> <?= $ppkb['IMO'] ?></div>
                                <div class="data-item"><span>Call Sign:</span> <?= $ppkb['call_sign'] ?></div>
                                <div class="data-item"><span>Vsl Insurance Numb:</span> -</div>
                                <div class="data-item">
                                    <span>Owner/Charter:</span> <?= $ship->ship_owner ?> | <?= $ppkb['charter'] ?>
                                </div>
                                <div class="data-item"><span>Flag:</span> <?= $ship->flag ?></div>
                                <div class="data-item"><span>Master Name:</span> <?= $ppkb['master_name'] ?></div>
                                <div class="data-item">
                                    <span>Route (Line/Tramp):</span> <?= $ppkb['route'] ?>
                                </div>
                                <div class="data-item"><span>Agent:</span> <?= $ppkb['agent_name'] ?></div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-6 forms-part">
                                <div class="data-item"><span>GT:</span> <?= $ship->GT ?> Ton</div>
                                <div class="data-item"><span>DWT:</span> <?= $ship->DWT ?>Ton</div>
                                <div class="data-item"><span>LOA:</span><?= $ship->LOA ?> Meter</div>
                                <div class="data-item"><span>Breadth:</span><?= $ship->breadth ?> Meter</div>
                                <div class="data-item"><span>Air Draft:</span><?= $ship->air_craft  ?> Meter</div>
                                <div class="data-item"><span>Max. Draft:</span><?= $ship->air_craft ?> Meter</div>
                                <div class="data-item"><span>Anchor Post:</span> <?= $ship->anchor_point ?> North/East</div>
                                <div class="data-item">
                                    <span>Loading Point:</span> <?= $ppkb['loading_point'] ?> North/East
                                </div>
                            </div>
                        </div>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <h5>SHIP PARTICULAR TUG<span> (DATA KAPAL TUG)</span></h5>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <div class="row particular-form mt-3">
                            <!-- Kolom Kiri -->
                            <div class="col-6 forms-part">
                                <div class="data-item"><span>Ship Name:</span> <?= $ppkb['ship_name'] ?></div>
                                <div class="data-item"><span>IMO/MMSI Numb:</span> <?= $ppkb['IMO2'] ?></div>
                                <div class="data-item"><span>Call Sign:</span> <?= $ppkb['call_sign'] ?></div>
                                <div class="data-item"><span>Vsl Insurance Numb:</span> -</div>
                                <div class="data-item">
                                    <span>Owner/Charter:</span> <?= $ship2->ship_owner ?> | <?= $ppkb['charter'] ?>
                                </div>
                                <div class="data-item"><span>Flag:</span> <?= $ship2->flag ?></div>
                                <div class="data-item"><span>Master Name:</span> <?= $ppkb['master_name'] ?></div>
                                <div class="data-item">
                                    <span>Route (Line/Tramp):</span> <?= $ppkb['route'] ?>
                                </div>
                                <div class="data-item"><span>Agent:</span> <?= $ppkb['agent_name'] ?></div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-6 forms-part">
                                <div class="data-item"><span>GT:</span> <?= $ship2->GT ?> Ton</div>
                                <div class="data-item"><span>DWT:</span> <?= $ship2->DWT ?>Ton</div>
                                <div class="data-item"><span>LOA:</span><?= $ship2->LOA ?> Meter</div>
                                <div class="data-item"><span>Breadth:</span><?= $ship2->breadth ?> Meter</div>
                                <div class="data-item"><span>Air Draft:</span><?= $ship2->air_craft  ?> Meter</div>
                                <div class="data-item"><span>Max. Draft:</span><?= $ship2->air_craft ?> Meter</div>
                                <div class="data-item"><span>Anchor Post:</span> <?= $ship2->anchor_point ?> North/East</div>
                                <div class="data-item">
                                    <span>Loading Point:</span> <?= $ppkb['loading_point'] ?> North/East
                                </div>
                            </div>
                        </div>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <h5>Cargo Type <span> (Jenis Muatan)</span></h5>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <div class="cargo">
                            <h4>&#10004; <?= $ppkb['kind_cargo'] ?></h4>
                        </div>

                        <hr style="border: none; height: 3px; background-color: black" />
                        <h5>SHIP TYPE <span> (Jenis Kapal)</span></h5>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <div class="cargo">
                            <h4>&#10004; <?= $kategori['tipe_kapal'] ?></h4>
                        </div>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <h5>GEARED <span> (Derek)</span></h5>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <div class="geared">
                            <h4>&#10004; <?= $ppkb['geared'] ?></h4>
                            <div class="data-item">
                                <span>Numb of Crane / Grab (Jumlah Derek):</span> 2
                            </div>
                            <div class="data-item"><span>SWL</span> <?= $ppkb['SWL'] ?> Ton</div>
                        </div>
                        <hr style="border: none; height: 3px; background-color: black" />

                        <div class="data-item"><span>Last Port:</span> <?= $ppkb['last_port'] ?></div>
                        <div class="data-item"><span>Next Port:</span> <?= $ppkb['next_port'] ?></div>
                        <div class="eta-etd row">
                            <div class="col-6 data-item">
                                <span>ETA:</span>
                                <?= date('d F Y - h:i A', strtotime($ppkb['ETA'])) ?>
                            </div>
                            <div class="col-6 data-item">
                                <span>ETD:</span>
                                <?= date('d F Y - h:i A', strtotime($ppkb['ETD'])) ?>
                            </div>
                        </div>


                        <hr style="border: none; height: 3px; background-color: black" />
                        <h5>
                            Cargo Loading / Unloading Information
                            <span> (Informasi Bongkar Muat)</span>
                        </h5>
                        <hr style="border: none; height: 3px; background-color: black" />
                        <div class="ppkb_number mb-3">
                            <h3>
                                <?php
                                if ($ppkb['cargo_loading'] == 'Unloading') {
                                    echo 'Cargo Unloading to Vessel';
                                } elseif ($ppkb['cargo_loading'] == 'Loading') {
                                    echo 'Cargo Loading to Vessel';
                                } else {
                                    echo $ppkb['cargo_loading']; // Default kalau tidak sesuai
                                }
                                ?>
                            </h3>

                        </div>
                        <div class="loading-info">
                            <table
                                class="loading-table"
                                border="1"
                                cellspacing="0"
                                cellpadding="8">
                                <thead>
                                    <tr>
                                        <th>Shipper<br /><small>Pengirim</small></th>
                                        <th>Kind of Cargo<br /><small>Spesifikasi Cargo</small></th>
                                        <th>Qty<br /><small>Jumlah</small></th>
                                        <th>Unit<br /><small>Satuan</small></th>
                                        <th>Consignee<br /><small>Penerima</small></th>
                                        <th>Stevedoring<br /><small>PBM</small></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $ppkb['shipper'] ?></td>
                                        <td><?= $ppkb['kind_cargo'] ?></td>
                                        <td><?= $ppkb['qty'] ?></td>
                                        <td><?= $ppkb['unit'] ?></td>
                                        <td></td>
                                        <td><?= $ppkb['stevedoring'] ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="other-service" style="margin-top: 15px">
                                <strong>Other Service</strong> <span>(Jasa Lainnya)</span>
                                <ol style="margin-top: 5px">
                                    <li
                                        style="border-bottom: 1px solid #000; padding-bottom: 5px"></li>
                                    <li
                                        style="border-bottom: 1px solid #000; padding-bottom: 5px"></li>
                                    <li
                                        style="border-bottom: 1px solid #000; padding-bottom: 5px"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="footer-section">
                            <div class="top-info">
                                <div class="company">
                                    <strong>PT. Langlang Laju Layang</strong> - Terminal Operator
                                </div>
                                <div class="ship-agent">
                                    Ship Agent / Agen Kapal: <strong><?= $agent['name'] ?></strong>
                                </div>
                                <div class="date-info">
                                    Loc./Date: <strong>WEPA, 13 JUN 2025</strong>
                                </div>
                            </div>

                            <table class="footer-table">
                                <thead>
                                    <tr>
                                        <th>Tembusan :</th>
                                        <th>Lampiran :</th>
                                        <th>Keterangan :</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1. Ka. Cabang PT. Langlang Laju Layang <br />
                                            2. Div. Keuangan PT. Langlang Laju Layang
                                        </td>
                                        <td>
                                            1. Ship Particular <br />
                                            2. Shipping Instruction (SI) / Aka Muat <br />
                                            3. BL dan Manifest / Ribs Bongkar <br />
                                            4. Crew List (Daftar Awak Kapal)
                                        </td>
                                        <td>
                                            BERTHING <br />
                                            REDE → YOUSHAN
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="footer-table">
                                <thead>
                                    <tr>
                                        <th>Lampiran Dokumen Kapal:</th>
                                        <th>File :</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1. NIB <br />
                                            2. PMKU <br />
                                            3. SKT Pajak <br />
                                            4. SPPKP <br />
                                            5. SKTD
                                        </td>
                                        <td>
                                            <?php if (!empty($agent['NIB'])): ?>
                                                <a class="text-danger" href="<?= base_url('uploads/' . rawurlencode($agent['NIB'])); ?>" target="_blank">

                                                    Buka
                                                </a>
                                            <?php endif; ?><br />
                                            <?php if (!empty($agent['PMKU'])): ?>
                                                <a class="text-danger" href="<?= base_url('uploads/' . rawurlencode($agent['PMKU'])); ?>" target="_blank">

                                                    Buka
                                                </a>
                                            <?php endif; ?><br />
                                            <?php if (!empty($agent['SKT'])): ?>
                                                <a class="text-danger" href="<?= base_url('uploads/' . rawurlencode($agent['SKT'])); ?>" target="_blank">

                                                    Buka
                                                </a>
                                            <?php endif; ?><br />
                                            <?php if (!empty($agent['SPPKP'])): ?>
                                                <a class="text-danger" href="<?= base_url('uploads/' . rawurlencode($agent['SPPKP'])); ?>" target="_blank">

                                                    Buka
                                                </a>
                                            <?php endif; ?><br />
                                            <?php if (!empty($agent['SKTD'])): ?>
                                                <a class="text-danger" href="<?= base_url('uploads/' . rawurlencode($agent['SKTD'])); ?>" target="_blank">

                                                    Buka
                                                </a>
                                            <?php endif; ?><br />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex gap-2 m-3 button-comb">
                            <?php if (!empty($ppkb['ship_file'])): ?>
                                <a href="<?= base_url('uploads/' . rawurlencode($ppkb['ship_file'])); ?>" target="_blank">

                                    <button class="btn btn-primary">View Ship Particular</button>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($ppkb['tonnage_certificate'])): ?>
                                <a href="<?= base_url('uploads/' . rawurlencode($ppkb['tonnage_certificate'])); ?>" target="_blank">
                                    <button class="btn btn-primary">View Tonnage Certificate</button>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($ppkb['ship_file2'])): ?>
                                <a href="<?= base_url('uploads/' . rawurlencode($ppkb['ship_file2'])); ?>" target="_blank">

                                    <button class="btn btn-primary">View Ship Particular 2</button>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($ppkb['tonnage_certificate2'])): ?>
                                <a href="<?= base_url('uploads/' . rawurlencode($ppkb['tonnage_certificate2'])); ?>" target="_blank">
                                    <button class="btn btn-primary">View Tonnage Certificate 2</button>
                                </a>
                            <?php endif; ?>
                            <a href="<?= base_url('OPS/edit_ppkb'); ?>"> <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="<?= base_url('OPS/ppkb'); ?>">
                                <button class="btn btn-dark">Kembali</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->

            <!-- footer -->

        </div>
        <?php $this->load->view('admin/partial/footer') ?>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

</body>

</html>