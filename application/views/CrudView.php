<?php $this->load->view('includes/header'); ?>

    <br/>
    <br/>

    <div class="container">

    <!-- Modal -->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Nama Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Form -->
              <!-- Action = CrudController/create -->
              <form method="post" action="<?= site_url('CrudController/create') ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Depan</label>
                  <input type="text" class="form-control" name="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Belakang</label>
                  <input type="text" class="form-control" name="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kontak</label>
                  <input type="text" class="form-control" name="kontak" aria-describedby="emailHelp" placeholder="Kontak">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Biodata</label>
                  <input type="text" class="form-control" name="biodata" aria-describedby="emailHelp" placeholder="Biodata">
                </div>

                <button type="submit" class="btn btn-primary" value="save">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <br/>
      <br/>

      <!-- Table -->
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Kontak</th>
            <th scope="col">Biodata</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- foreach -->
          <?php foreach ($result as $row) {?>
            <tr>
              <th scope="row"><?= $row->id; ?></th>
              <td><?= $row->nama_depan; ?></td>
              <td><?= $row->nama_belakang; ?></td>
              <td><?= $row->tanggal_lahir; ?></td>
              <td><?= $row->kontak; ?></td>
              <td><?= $row->biodata; ?></td>
              <td>
                <a href="<?= site_url('CrudController/edit'); ?>/<?= $row->id; ?>"><button type="button" class="btn btn-warning">Ubah</button></a> | 
                <a href="<?= site_url('CrudController/delete'); ?>/<?= $row->id; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>