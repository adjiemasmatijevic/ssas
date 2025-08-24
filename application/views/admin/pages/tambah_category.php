  <main class="col-md-10 ms-sm-auto px-md-4">
      <!-- Navbar -->
      <nav class="navbar navbar-light sticky-top p-3">
          <span class="navbar-brand mb-0 h4">PPKB</span>
          <div>
              <button class="btn btn-sm btn-outline-dark"><i class="bi bi-box-arrow-right"></i>
                  Logout</button>
          </div>
      </nav>
      <form action="<?= base_url('admin/insert_category') ?>" method="post">
          <div class="row">
              <div class="col-md-4">
                  <label>SSAS Code</label>
                  <input type="text" name="ssas_code" value="<?= $ssas_code ?>" readonly>
                  <input type="text" name="no_header" readonly value="<?= $random ?>">
              </div>
              <div class="col-md-4">
                  <label>Nama Agen Kapal</label>
                  <input type="text" name="nama_agen" required>
              </div>
              <div class="col-md-4">
                  <label>Tipe Kapal</label>
                  <select name="tipe_kapal" required>
                      <option value="">--pilih Type--</option>
                      <option value="Motor Vessel">Motor Vessel</option>
                      <option value="Tanker">Tanker</option>
                      <option value="LCT">LCT</option>
                      <option value="Tug & Barge">Tug & Barge</option>
                      <option value="SPOB">SPOB</option>
                  </select>
              </div>
          </div>
          <br>
          <button type="submit" class="btn btn-dark">Buat PPKB</button>
      </form>
  </main>