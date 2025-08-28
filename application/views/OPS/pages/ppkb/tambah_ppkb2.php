<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php $this->load->view('OPS/partial/head') ?>

<body>
    <div class="container-scroller">
        <!-- navbar -->
        <?php $this->load->view('OPS/partial/navbar') ?>

        <div class="container-fluid page-body-wrapper">
            <!-- setting-panel -->
            <?php $this->load->view('OPS/partial/setting-panel') ?>
            <!-- menu sidebar -->
            <?php $this->load->view('OPS/partial/sidebar') ?>

            <div class="main-panel">
                <div class="card-body">
                    <h4 class="card-title">PPKB form</h4>
                    <form action="<?= base_url('OPS/preview_ppkb2') ?>" method="post" enctype="multipart/form-data" class="mt-4 container-fluid">
                        <!-- Row 1: SSAS, Nama Agen, Tipe Kapal -->
                        <div class="row">
                            <div class="col-md-4">
                                <label class="font-weight-bold">SSAS Code</label>
                                <input type="text" class="form-control" name="ssas_code" value="<?= isset($kategori['ssas_code']) ? $kategori['ssas_code'] : '' ?>" readonly>
                                <input type="hidden" name="no_header" value="<?= isset($kategori['no_header']) ? $kategori['no_header'] : '' ?>">
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Nama Agen Kapal</label>
                                <input type="text" class="form-control" name="nama_agen" value="<?= isset($kategori['nama_agen']) ? $kategori['nama_agen'] : '' ?>" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Tipe Kapal</label>
                                <input type="text" class="form-control" name="tipe_kapal" value="<?= isset($kategori['tipe_kapal']) ? $kategori['tipe_kapal'] : '' ?>" readonly>
                            </div>
                        </div>

                        <!-- Row 2: Vessel Movement, PPKB Number, Route -->
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label class="font-weight-bold">PPKB Number</label>
                                <input type="text" class="form-control" name="ppkb_number" value="<?= $ppkb_number ?>" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Vessel Movement</label>
                                <select class="form-control" name="vessel_movement" required>
                                    <option value="">--- select a vessel movement activity ---</option>
                                    <option value="IN">IN</option>
                                    <option value="Shifting Out">Shifting Out</option>
                                    <option value="Shifting IN">Shifting IN</option>
                                    <option value="Shifting">Shifting</option>
                                    <option value="OUT">OUT</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">Route</label>
                                <select class="form-control" name="route" required>
                                    <option value="">--- select a route ---</option>
                                    <option value="1">Domestic Liner</option>
                                    <option value="2">Domestic Tramper</option>
                                    <option value="3">Foreign Liner</option>
                                    <option value="4">Foreign Tramper</option>
                                    <option value="5">Oceangoing</option>
                                </select>
                            </div>
                        </div>

                        <!-- SHIP PARTICULAR -->
                        <h5 class="mt-4 font-weight-bold border-bottom pb-2">SHIP PARTICULAR BARGE</h5>
                        <div class="row mt-3">
                            <div class="col-md-3"><label>IMO/MMSI Numb</label><input type="text" class="form-control" name="imo_mmsi" required></div>
                            <div class="col-md-3"><label>Flag</label><input type="text" class="form-control" name="flag" required></div>
                            <div class="col-md-3"><label>Breadth</label><input type="text" class="form-control" name="breadth" required></div>
                            <div class="col-md-3"><label>Ship Name</label><input type="text" class="form-control" name="ship_name" required></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>GT</label><input type="text" class="form-control" name="gt" required></div>
                            <div class="col-md-3"><label>DWT</label><input type="text" class="form-control" name="dwt"></div>
                            <div class="col-md-3"><label>Call Sign</label><input type="text" class="form-control" name="call_sign" required></div>
                            <div class="col-md-3"><label>LOA</label><input type="text" class="form-control" name="loa" required></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>Air Draft</label><input type="text" class="form-control" name="air_draft"></div>
                            <div class="col-md-3"><label>Max Draft</label><input type="text" class="form-control" name="max_draft"></div>
                            <div class="col-md-3"><label>Ship Owner</label><input type="text" class="form-control" name="ship_owner" required></div>
                            <div class="col-md-3"><label>Anchor Point</label><input type="text" class="form-control" name="anchor_point"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>Master Name</label><input type="text" class="form-control" name="master_name"></div>
                            <div class="col-md-3"><label>Charter</label><input type="text" class="form-control" name="charter"></div>
                            <div class="col-md-3"><label>Port of Registry</label><input type="text" class="form-control" name="port_registry"></div>
                            <div class="col-md-3 text-center">
                                <label>Upload Ship Particular File</label>
                                <input type="file" class="form-control" name="ship_particular_file" accept=".pdf">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-center">
                                <label>Upload Tonnage Certificate</label>
                                <input type="file" class="form-control" name="tonnage_certificate" accept=".pdf">
                                <small class="text-muted">.pdf (max 3MB)</small>
                            </div>
                        </div>

                        <!-- CARGO DETAILS -->
                        <h5 class="mt-4 font-weight-bold border-bottom pb-2">CARGO DETAILS</h5>
                        <div class="row mt-3">
                            <div class="col-md-3"><label>Cargo Type</label>
                                <select class="form-control" name="cargo_type" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Liquid Bulk">Liquid Bulk</option>
                                    <option value="Dry Bulk">Dry Bulk</option>
                                    <option value="Container">Container</option>
                                </select>
                            </div>
                            <div class="col-md-3"><label>Geared</label>
                                <select class="form-control" name="geared" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-3"><label>Quantity Of Crane / Grab</label><input type="text" class="form-control" name="qty_crane"></div>
                            <div class="col-md-3"><label>SWL</label><input type="text" class="form-control" name="swl" placeholder="Ton"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>Last Port</label><input type="text" class="form-control" name="last_port"></div>
                            <div class="col-md-3"><label>Next Port</label><input type="text" class="form-control" name="next_port"></div>
                            <div class="col-md-3"><label>ETA</label><input type="datetime-local" class="form-control" name="eta"></div>
                            <div class="col-md-3"><label>ETD</label><input type="datetime-local" class="form-control" name="etd"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4"><label>Cargo Loading / Unloading Information</label>
                                <select class="form-control" name="cargo_info">
                                    <option value="Loading">Loading</option>
                                    <option value="Unloading">Unloading</option>
                                    <option value="Loading, Unloading">Loading, Unloading</option>
                                </select>
                            </div>
                            <div class="col-md-4"><label>Loading/Unloading Point</label>
                                <select class="form-control" name="loading_point">
                                    <option value="">--- Pilihan ---</option>
                                    <option value="Dock 1">Dock 1</option>
                                    <option value="Dock 2">Dock 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>Shipper</label><input type="text" class="form-control" name="shipper"></div>
                            <div class="col-md-3"><label>Consignee</label><input type="text" class="form-control" name="consignee"></div>
                            <div class="col-md-3"><label>Kind Of Cargo</label>
                                <select class="form-control" name="kind_cargo">
                                    <option value="">---- Pilihan ----</option>
                                    <option value="Dry Bulk">Dry Bulk</option>
                                    <option value="Liquid Bulk">Liquid Bulk</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-2"><label>Qty</label><input type="text" class="form-control" name="qty"></div>
                            <div class="col-md-2"><label>Unit</label><input type="text" class="form-control" name="unit"></div>
                            <div class="col-md-2"><label>Stevedoring</label><input type="text" class="form-control" name="stevedoring"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12"><label>Other Service</label><input type="text" class="form-control" name="other_service"></div>
                        </div>

                        <!-- SHIP PARTICULAR -->
                        <h5 class="mt-4 font-weight-bold border-bottom pb-2">SHIP PARTICULAR TUG</h5>
                        <div class="row mt-3">
                            <div class="col-md-3"><label>IMO/MMSI Numb</label><input type="text" class="form-control" name="imo_mmsi2" required></div>
                            <div class="col-md-3"><label>Flag</label><input type="text" class="form-control" name="flag2" required></div>
                            <div class="col-md-3"><label>Breadth</label><input type="text" class="form-control" name="breadth2" required></div>
                            <div class="col-md-3"><label>Ship Name</label><input type="text" class="form-control" name="ship_name2" required></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>GT</label><input type="text" class="form-control" name="gt2" required></div>
                            <div class="col-md-3"><label>DWT</label><input type="text" class="form-control" name="dwt2"></div>
                            <div class="col-md-3"><label>Call Sign</label><input type="text" class="form-control" name="call_sign2" required></div>
                            <div class="col-md-3"><label>LOA</label><input type="text" class="form-control" name="loa2" required></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>Air Draft</label><input type="text" class="form-control" name="air_draft2"></div>
                            <div class="col-md-3"><label>Max Draft</label><input type="text" class="form-control" name="max_draft2"></div>
                            <div class="col-md-3"><label>Ship Owner</label><input type="text" class="form-control" name="ship_owner2" required></div>
                            <div class="col-md-3"><label>Anchor Point</label><input type="text" class="form-control" name="anchor_point2"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3"><label>Master Name</label><input type="text" class="form-control" name="master_name2"></div>
                            <div class="col-md-3"><label>Charter</label><input type="text" class="form-control" name="charter2"></div>
                            <div class="col-md-3"><label>Port of Registry</label><input type="text" class="form-control" name="port_registry"></div>
                            <div class="col-md-3 text-center">
                                <label>Upload Ship Particular File</label>
                                <input type="file" class="form-control" name="ship_particular_file2" accept=".pdf">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-center">
                                <label>Upload Tonnage Certificate</label>
                                <input type="file" class="form-control" name="tonnage_certificate2" accept=".pdf">
                                <small class="text-muted">.pdf (max 3MB)</small>
                            </div>
                        </div>

                        <!-- SHIP AGENT SECTION -->
                        <h5 class="mt-4 font-weight-bold border-bottom pb-2">SHIP AGENT</h5>
                        <div class="row mt-3">
                            <div class="col-md-3"><label>Agent Name</label><input type="text" class="form-control" name="agent_name" required></div>
                            <div class="col-md-3"><label>PIC</label><input type="text" class="form-control" name="pic"></div>
                            <div class="col-md-3"><label>NPWP</label><input type="text" class="form-control" name="npwp"></div>
                            <div class="col-md-3"><label>Email</label><input type="email" class="form-control" name="email"></div>
                            <div class="col-md-3 mt-3"><label>No HP</label><input type="text" class="form-control" name="phone"></div>
                            <div class="col-md-6 mt-3"><label>Company Address</label><textarea class="form-control" name="company_address"></textarea></div>
                        </div>

                        <!-- Upload Dokumen Section -->
                        <!-- Upload Dokumen Section -->
                        <h5 class="mt-4 font-weight-bold border-bottom pb-2">Dokumen Perusahaan</h5>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label>Upload NIB Document</label>
                                <input type="file" class="form-control mb-2" name="nib">
                                <input type="date" class="form-control" name="nib_date">
                            </div>

                            <div class="col-md-3">
                                <label>Upload PMKU Document</label>
                                <input type="file" class="form-control mb-2" name="pmku">
                                <input type="date" class="form-control" name="pmku_date">
                            </div>

                            <div class="col-md-3">
                                <label>Upload SPPKP Document</label>
                                <input type="file" class="form-control mb-2" name="sppkp">
                                <input type="date" class="form-control" name="sppkp_date">
                            </div>

                            <div class="col-md-3">
                                <label>Upload SKTD Document</label>
                                <input type="file" class="form-control mb-2" name="sktd">
                                <input type="date" class="form-control" name="sktd_date">
                            </div>

                            <div class="col-md-3 mt-3">
                                <label>Upload SKT Pajak Document</label>
                                <input type="file" class="form-control mb-2" name="skt">
                                <input type="date" class="form-control" name="skt_date">
                            </div>
                        </div>


                        <!-- Submit -->
                        <div class="mt-4 text-right">
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>

                </div>
                <!-- content-wrapper ends -->
                <?php $this->load->view('OPS/partial/footer') ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
</body>

</html>