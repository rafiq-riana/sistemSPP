
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
                <button type="button" class="btn btn-primary btn-sm tambahDataKelas">Tambah</button>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['kelas'] as $key => $kelas) : ?>
                        <tr>
                          <td><?= $key + 1; ?></td>
                          <td><?= $kelas['id_kelas']; ?></td>
                          <td><?= $kelas['jurusan']; ?> <?= $kelas['nama_kelas']; ?></td>
                          <td>
                          <a href="#"><i class="fa fa-fw fa-edit tampil-modal-edit" data-id_kelas="<?= $kelas['id_kelas']; ?>" data-nama_kelas="<?= $kelas['nama_kelas'];?>" data-jurusan="<?= $kelas['jurusan']; ?>"></i></a>
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
        <h4 class="modal-title" id="formLabelEditKelas">Modal Default</h4>
      </div>
        
      <div class="box-body">
        <form action="<?= BASEPATH; ?>/admin/tambahKelas" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
              <label>ID Kelas</label>
              <input type="text" name="id_kelas" id="id_kelas" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Kelas</label>
              <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" name="jurusan" id="jurusan" class="form-control">
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