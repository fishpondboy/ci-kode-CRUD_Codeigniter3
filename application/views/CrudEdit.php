<?php $this->load->view('includes/header'); ?>
    <br/>
    <br/>
        <div class="container">
            <form method="post" action="<?= site_url('CrudController/update') ?>/<?= $row->id; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Depan</label>
                    <input type="text" class="form-control" name="nama_depan" value="<?= $row->nama_depan; ?>" aria-describedby="emailHelp" placeholder="Nama Depan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Belakang</label>
                    <input type="text" class="form-control" name="nama_belakang" value="<?= $row->nama_belakang; ?>" aria-describedby="emailHelp" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?= $row->tanggal_lahir; ?>" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kontak</label>
                    <input type="text" class="form-control" name="kontak" value="<?= $row->kontak; ?>" aria-describedby="emailHelp" placeholder="Kontak">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Biodata</label>
                    <input type="text" class="form-control" name="biodata" value="<?= $row->biodata; ?>" aria-describedby="emailHelp" placeholder="Biodata">
                </div>

                <button type="submit" class="btn btn-primary" value="save">Submit</button>
                <a href='<?= site_url('CrudController'); ?>'><button type="button" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
    </body>
</html>