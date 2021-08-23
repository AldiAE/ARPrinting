

<!-- Page-Title -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Transaksi Penjualan</b></h4><br>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" role="form">   
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pilih Kode Barang</label>
                            <div class="col-md-8">
                                <select class="selectpicker" data-style="btn-white">
                                    <option>--Kode Barang--</option>
                                    <option>A01</option>
                                    <option>A04</option>
                                    <option>B55</option>
                                    <option>B74</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Barang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga Barang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="hargaBarang" name="hargaBarang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Barang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="jumlahBarang" name="jumlahBarang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Total Harga</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="totalHarga" name="totalHarga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="v1">
                                <button type="button" class="btn btn-default btn-rounded waves-effect waves-light">Proses</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end row -->

<style>
    .v1 {
        position: absolute;
        left: 400px;
    }
</style>