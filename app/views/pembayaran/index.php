
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
                        <th>Nominal</th>
                        <th>Bayar</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['pembayaran'] as $key => $bayar) : ?>
                        <tr>
                          <td><?= $bayar['nisn'] ?></td>
                          <td><?= $bayar['nama'] ?></td>\
                          <td><?= $bayar['nominal'] ?></td>
                          <td><?= $bayar['jumlah_bayar'] ?></td>
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
        <form action="<?= BASEPATH; ?>/pembayaran/entriPembayaran" method="post" role="form">
            <!-- text input -->
            <div class="form-group">
              <label>ID Pembayaran</label>
              <input type="text" name="id_pembayaran" class="form-control">
            </div>
            <div class="form-group">
              <label>ID Petugas</label>
              <select class="form-control" name="id_petugas">
                <?php foreach ($data['petugas'] as $key => $petugas) : ?>
                <option value="<?= $petugas['id_petugas']; ?>"><?= $petugas['username']; ?> </option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label>NISN</label>
              <select class="form-control" name="nisn">
                <?php foreach ($data['siswa'] as $key => $petugas) : ?>
                <option value="<?= $petugas['nisn']; ?>"><?= $petugas['nisn']; ?> <?= $petugas['nama']; ?></option>
                <?php endforeach ?>
              </select>
            </div>            
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tgl_bayar" class="form-control">
            </div>
            <div class="form-group">
              <label>Bulan Bayar</label>
              <input type="text" name="bulan_dibayar" class="form-control">
            </div>
            <div class="form-group">
              <label>Tahun Bayar</label>
              <input type="text" name="tahun_dibayar" class="form-control">
            </div>
            <div class="form-group">
              <label>Nominal Tahun</label>
              <select class="form-control" name="id_spp">
                <?php foreach ($data['spp'] as $key => $spp) : ?>
                <option value="<?= $spp['id_spp']; ?>"><?= $spp['tahun']; ?> : <?= $spp['nominal']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label>Total Bayar</label>
              <input type="text" name="jumlah_bayar" class="form-control">
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