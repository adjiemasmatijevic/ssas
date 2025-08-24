 <main class="col-md-10 ms-sm-auto px-md-4">
     <!-- Navbar -->
     <nav class="navbar navbar-light sticky-top p-3">
         <span class="navbar-brand mb-0 h4">PPKB</span>
         <div>
             <button class="btn btn-sm btn-outline-dark"><i class="bi bi-box-arrow-right"></i>
                 Logout</button>
         </div>
     </nav>



     <a href="<?= base_url('admin/tambah_category') ?>" class="btn btn-md btn-dark">
         Tambah</a>
     <div class="card shadow-sm mt-3 p-3">
         <h5>LIST OF PPKB</h5>
         <table class="table mt-3">
             <thead>
                 <tr>
                     <th>No.</th>
                     <th>SSAS CODE</th>
                     <th>Tanggal</th>
                     <th>Nama Agen Kapal</th>
                     <th>Nomor PPKB</th>
                     <th>Aktivitas Gerakan</th>
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
                    ?>
                         <tr>
                             <td><?= $no ?></td>
                             <td><?= $h['kategori_trx_id'] ?></td>
                             <td><?= $h['header_date']  ?></td>
                             <td><?= $h['agent_id'] ?></td>
                             <td><?= $nomor_ppkb ?></td>
                             <td><?= $vesselMov ?></td>
                             <td>
                                 <a href="<?= base_url('admin/show?id=' . urlencode($nomor_ppkb)) ?>" class="btn btn-sm btn-outline-dark">
                                     Review
                                 </a>
                                 <a class="btn btn-sm btn-outline-dark">
                                     Edit</a>
                                 <a href="<?= base_url('admin/delete?id=' . urldecode($h['kategori_trx_id'])) ?>"
                                     class="btn btn-sm btn-outline-dark"
                                     onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                     Hapus
                                 </a>

                             </td>
                         </tr>
                 <?php

                        }
                    } ?>
             </tbody>
         </table>
     </div>
 </main>