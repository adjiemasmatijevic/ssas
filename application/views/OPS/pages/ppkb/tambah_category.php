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
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buat PPKB Baru</h4>
                            <p class="card-description">Isi data berikut untuk membuat PPKB baru</p>

                            <!-- Form Start -->
                            <form class="forms-sample" action="<?= base_url('OPS/insert_category') ?>" method="post">
                                <div class="form-row">
                                    <!-- SSAS Code -->
                                    <div class="form-group col-md-4">
                                        <label for="ssas_code">SSAS Code</label>
                                        <input type="text" class="form-control" id="ssas_code" name="ssas_code" value="<?= $ssas_code ?>" readonly>
                                        <input type="hidden" name="no_header" value="<?= $random ?>">
                                    </div>
                                    <!-- Nama Agen Kapal -->
                                    <div class="form-group col-md-4">
                                        <label for="nama_agen">Nama Agen Kapal</label>
                                        <input type="text" class="form-control" id="nama_agen" name="nama_agen" required>
                                    </div>
                                    <!-- Tipe Kapal -->
                                    <div class="form-group col-md-4">
                                        <label for="tipe_kapal">Tipe Kapal</label>
                                        <select class="form-control" id="tipe_kapal" name="tipe_kapal" required>
                                            <option value="">--pilih Type--</option>
                                            <option value="Motor Vessel">Motor Vessel</option>
                                            <option value="Tanker">Tanker</option>
                                            <option value="LCT">LCT</option>
                                            <option value="Tug & Barge">Tug & Barge</option>
                                            <option value="SPOB">SPOB</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-info">Buat PPKB</button>
                                    <a href="<?= base_url('OPS') ?>" class="btn btn-light">Cancel</a>
                                </div>
                            </form>
                            <!-- Form End -->

                        </div>
                    </div>
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