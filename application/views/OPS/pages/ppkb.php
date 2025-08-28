<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php $this->load->view('admin/partial/head')  ?>

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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PPKB List</h4>
                        <a href="<?= base_url('OPS/tambah_category') ?>" class="btn btn-success btn-sm mb-3">
                            <i class="mdi mdi-plus"></i> Tambah PPKB Baru
                        </a>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>SSAS CODE</th>
                                        <th>Tanggal</th>
                                        <th>Nama Agen Kapal</th>
                                        <th>Nomor PPKB</th>
                                        <th>Act. Gerakan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($header)) {
                                        $no = 0;
                                        foreach ($header as $h) {
                                            $no++;
                                            $nomor_ppkb = $this->M_ppkb->getOneByHeader($h['no_header'])->ppkb_number;
                                            $vesselMov = $this->M_ppkb->getOneByHeader($h['no_header'])->vessel_movement;
                                            $status = $this->M_ppkb->getOneByHeader($h['no_header'])->status;


                                    ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $h['kategori_trx_id'] ?></td>
                                                <td><?= $h['header_date']  ?></td>
                                                <td><?= $h['agent_id'] ?></td>
                                                <td><?= $nomor_ppkb ?></td>
                                                <td><?= $vesselMov ?></td>
                                                <td> <?= $status == 0 ? 'Review OPC' : ($status == 1 ? 'Approve' : 'Status Tidak Dikenal') ?></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Action Buttons">
                                                        <a href="<?= base_url('OPS/show?id=' . urlencode($nomor_ppkb)) ?>" class="btn btn-primary btn-sm">
                                                            Review
                                                        </a>
                                                        <!-- <a href="<?= base_url('OPS/show?id=' . urlencode($nomor_ppkb)) ?>" class="btn btn-info btn-sm">
                                                            Buat PPKB
                                                        </a> -->
                                                        <a href="<?= base_url('OPS/edit?id=' . urlencode($nomor_ppkb)) ?>" class="btn btn-warning btn-sm">
                                                            Edit
                                                        </a>
                                                        <a href="<?= base_url('OPS/delete?id=' . urldecode($h['kategori_trx_id'])) ?>"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                            class="btn btn-danger btn-sm">
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </td>

                                            </tr>
                                    <?php

                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->

                <!-- footer -->

            </div>
            <!-- main-panel ends -->
        </div>
        <?php $this->load->view('admin/partial/footer') ?>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

</body>

</html>