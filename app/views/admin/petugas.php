
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
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['petugas'] as $key => $petugas) : ?>
                      <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $petugas['id_petugas']; ?></td>
                        <td><?= $petugas['nama_petugas']; ?></td>
                        <td><?= $petugas['username']; ?></td>
                        <td><?= $petugas['password']; ?></td>
                        <td><?= $petugas['level']; ?></td>
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
        <form action="<?= BASEPATH; ?>/admin/tambahPetugas" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="id_petugas" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_petugas" class="form-control">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
              <label>Level</label>
              <select class="form-control" name="level">
                <option value="user">User</option>
                <option value="admin">Admin</option>
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