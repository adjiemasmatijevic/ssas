<main class="col-md-10 ms-sm-auto px-md-4">
    <!-- Navbar -->
    <nav class="navbar navbar-light sticky-top p-3">
        <span class="navbar-brand mb-0 h4">PPKB</span>
        <div>
            <button class="btn btn-sm btn-outline-dark"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </div>
    </nav>

    <form action="<?= base_url('admin/preview_ppkb') ?>" method="post" enctype="multipart/form-data" class="mt-4">
        <!-- Row 1: SSAS, Nama Agen, Tipe Kapal -->
        <div class="row mt-4">
            <div class="col-md-4">
                <label>SSAS Code</label>
                <input type="text" name="ssas_code" value="<?= isset($kategori['ssas_code']) ? $kategori['ssas_code'] : '' ?>" class="form-control" readonly>
                <input type="text" name="no_header" value="<?= isset($kategori['no_header']) ? $kategori['no_header'] : '' ?>" class="form-control" readonly>
            </div>
            <div class="col-md-4">
                <label>Nama Agen Kapal</label>
                <input type="text" name="nama_agen" value="<?= isset($kategori['nama_agen']) ? $kategori['nama_agen'] : '' ?>" class="form-control" readonly>
            </div>
            <div class="col-md-4">
                <label>Tipe Kapal</label>
                <input type="text" name="tipe_kapal" value="<?= isset($kategori['tipe_kapal']) ? $kategori['tipe_kapal'] : '' ?>" class="form-control" readonly>
            </div>
        </div>

        <!-- Row 2: Vessel Movement, PPKB Number, Route -->
        <div class="row mt-3">
            <div class="col-md-4">
                <label>PPKB Number</label>
                <input type="text" name="ppkb_number" value="<?= $ppkb_number ?>" class="form-control" readonly>
            </div>
            <div class="col-md-4">
                <label>Vessel Movement</label>
                <select name="vessel_movement" class="form-control" required>
                    <option value="">--- select a vessel movement activity ---</option>
                    <option value="IN">IN</option>
                    <option value="Shifting Out">Shifting Out</option>
                    <option value="Shifting IN">Shifting IN</option>
                    <option value="Shifting">Shifting</option>
                    <option value="OUT">OUT</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Route</label>
                <select name="route" class="form-control" required>
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
        <h5 class="mt-4">SHIP PARTICULAR</h5>
        <div class="row mt-3">
            <div class="col-md-3">
                <label>IMO/MMSI Numb</label>
                <input type="text" name="imo_mmsi" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Flag</label>
                <input type="text" name="flag" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Breadth</label>
                <input type="text" name="breadth" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Ship Name</label>
                <input type="text" name="ship_name" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>GT</label>
                <input type="text" name="gt" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>DWT</label>
                <input type="text" name="dwt" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Call Sign</label>
                <input type="text" name="call_sign" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>LOA</label>
                <input type="text" name="loa" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Air Draft</label>
                <input type="text" name="air_draft" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Max Draft</label>
                <input type="text" name="max_draft" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Ship Owner</label>
                <input type="text" name="ship_owner" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Anchor Point</label>
                <input type="text" name="anchor_point" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Master Name</label>
                <input type="text" name="master_name" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Charter</label>
                <input type="text" name="charter" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Port of Registry</label>
                <input type="text" name="port_registry" class="form-control">
            </div>
            <div class="col-md-3 text-center">
                <label>Upload Ship Particular File</label>
                <input type="file" name="ship_particular_file" class="form-control" accept=".pdf">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3 text-center">
                <label>Upload Tonnage Certificate</label>
                <input type="file" name="tonnage_certificate" class="form-control" accept=".pdf">
                <small>.pdf (max 3MB)</small>
            </div>
        </div>
        <!--  CARGO DETAIL  -->
        <h5 class="mt-4">CARGO DETAILS</h5>
        <div class="row mt-3">
            <div class="col-md-3">
                <label>Cargo Type</label>
                <select name="cargo_type" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="Liquid Bulk">Liquid Bulk</option>
                    <option value="Dry Bulk">Dry Bulk</option>
                    <option value="Container">Container</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Geared</label>
                <select name="geared" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Quantity Of Crane / Grab</label>
                <input type="text" name="qty_crane" class="form-control">
            </div>
            <div class="col-md-3">
                <label>SWL</label>
                <input type="text" name="swl" class="form-control" placeholder="Ton">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Last Port</label>
                <input type="text" name="last_port" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Next Port</label>
                <input type="text" name="next_port" class="form-control">
            </div>
            <div class="col-md-3">
                <label>ETA</label>
                <input type="datetime-local" name="eta" class="form-control">
            </div>
            <div class="col-md-3">
                <label>ETD</label>
                <input type="datetime-local" name="etd" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <label>Cargo Loading / Unloading Information</label>
                <select name="cargo_info" class="form-control">
                    <option value="Loading">Loading</option>
                    <option value="Unloading">Unloading</option>
                    <option value="Loading, Unloading">Loading, Unloading</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Loading/Unloading Point</label>
                <select name="loading_point" class="form-control">
                    <option value="">--- Pilihan ---</option>
                    <option value="Dock 1">Dock 1</option>
                    <option value="Dock 2">Dock 2</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Shipper/Consignee</label>
                <input type="text" name="shipper" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Kind Of Cargo</label>
                <select name="kind_cargo" class="form-control">
                    <option value="">---- Pilihan ----</option>
                    <option value="Dry Bulk">Dry Bulk</option>
                    <option value="Liquid Bulk">Liquid Bulk</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Qty</label>
                <input type="text" name="qty" class="form-control">
            </div>
            <div class="col-md-2">
                <label>Unit</label>
                <input type="text" name="unit" class="form-control">
            </div>
            <div class="col-md-2">
                <label>Stevedoring</label>
                <input type="text" name="stevedoring" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <label>Other Service</label>
                <input type="text" name="other_service" class="form-control">
            </div>
        </div>


        <!-- SHIP AGENT SECTION -->
        <h5 class="mt-4">SHIP AGENT</h5>
        <div class="row mt-3">
            <div class="col-md-3">
                <label>Agent Name</label>
                <input type="text" name="agent_name" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>PIC</label>
                <input type="text" name="pic" class="form-control">
            </div>
            <div class="col-md-3">
                <label>NPWP</label>
                <input type="text" name="npwp" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="col-md-3">
                <label>No HP</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="col-md-6 mt-3">
                <label>Company Address</label>
                <textarea name="company_address" class="form-control"></textarea>
            </div>
        </div>

        <!-- Upload Dokumen Section -->
        <h5 class="mt-4">Dokumen Perusahaan</h5>
        <div class="row mt-3">
            <div class="col-md-3">
                <label>Upload NIB Document</label>
                <input type="file" name="nib_document" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Upload PMKU Document</label>
                <input type="file" name="pmku_document" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Upload SPPKP Document</label>
                <input type="file" name="sppkp_document" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Upload SKTD Pajak Document</label>
                <input type="file" name="sktd_document" class="form-control">
            </div>
        </div>

        <!-- Submit -->
        <div class="mt-4">
            <button type="submit" class="btn btn-dark">Simpan</button>
        </div>
    </form>
</main>