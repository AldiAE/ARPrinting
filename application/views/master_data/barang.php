

<!-- Page-Title -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Data Barang</b></h4>
            <div style="width: 100%; text-align: right; margin-bottom: 10px;">
                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>
            </div>

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1.</td>
                    <td>A01</td>
                    <td>Pensil</td>
                    <td>43</td>
                    <td>Rp. 1.000</td>
                    <td><a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default delete-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>A04</td>
                    <td>Bolpoint</td>
                    <td>25</td>
                    <td>Rp. 2.500</td>
                    <td><a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default delete-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>B55</td>
                    <td>Buku</td>
                    <td>104</td>
                    <td>Rp. 3.000</td>
                    <td><a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default delete-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>B74</td>
                    <td>Binder</td>
                    <td>22</td>
                    <td>Rp. 50.000</td>
                    <td><a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default delete-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->

<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Modal Heading</h4>
            </div>
            <form class="form-horizontal" role="form"> 
                <div class="modal-body">                                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Barang</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                        </div>
                    </div>                                  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>                                  
                    <div class="form-group">
                        <label class="col-md-3 control-label">No HP</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="noHP" name="noHP" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-success waves-effect waves-light">Ya</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->            