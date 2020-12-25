
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $data['judul'] ?></h3>
        <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
    <div class="box">
                <div class="box-header">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nominal</th>
                        <th>Bayar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['siswa'] as $key => $siswa) : ?>
                        <tr>
                          <td><?= $siswa['nisn']; ?></td>
                          <td><?= $siswa['nama']; ?></td>
                          <td><?= $siswa['jurusan']; ?> <?= $siswa['nama_kelas']; ?></td>
                          <td><?= $siswa['nominal']; ?></td>
                          <td><?= $siswa['jumlah_bayar']; ?></td>
                          <td>
                          <a href="#"><i class="fa fa-fw fa-folder-open-o"></i></a>  
                          <a href="#" data-id="#"><i class="fa fa-fw fa-edit"></i></a>
                          <a href="#"><i class="fa fa-fw fa-trash-o"></i></a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

    </div><!-- /.box-body -->
</div><!-- /.box -->

<div class="example-modal modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"  role="document">
    <div class="modal-content col-md-10">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal Default</h4>
      </div>
        
      <div class="box-body">
        <form action="<?= BASEPATH; ?>/admin/tambahSiswa" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
              <label>NIS</label>
              <input type="text" name="nisn" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
              <label>No. Telp</label>
              <input type="text" name="no_telp" class="form-control">
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <select class="form-control" name="id_kelas">
                <?php foreach ($data['kelas'] as $key => $kelas) : ?>
                <option value="<?= $kelas['id_kelas']; ?>"><?= $kelas['jurusan']; ?> <?= $kelas['nama_kelas']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label>Tahun Ajaran</label>
              <select class="form-control" name="id_spp">
                <?php foreach ($data['spp'] as $key => $spp) : ?>
                <option value="<?= $spp['id_spp']; ?>"><?= $spp['tahun']; ?> </option>
                <?php endforeach ?>
              </select>
            </div>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" value="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->