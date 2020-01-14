<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="btn-group">
            <a href="<?php echo base_url('admin/inventory/procurement');?>" type="button" class="btn btn-<?=$page=='procurement'?'info':'default'?>">Pengadaan Barang</a>
            <a href="<?php echo base_url('admin/inventory/add');?>" type="button" class="btn btn-<?=$page=='add'?'info':'default'?>">Input Data</a>
            <a href="<?php echo base_url('admin/inventory/index');?>" type="button" class="btn btn-<?=$page=='index'?'info':'default'?>">List Data</a>
            <a href="<?php echo base_url('admin/inventory/sold');?>" type="button" class="btn btn-<?=$page=='sold'?'info':'default'?>">Barang Keluar</a>
            <a href="<?php echo base_url('admin/inventory/report');?>" type="button" class="btn btn-<?=$page=='report'?'info':'default'?>">Laporan</a>
          </div>
          <br> 
          </div><!-- /.col -->
          </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="card card-default">
          <h1 class="m-1 text-dark">Inventory - Form Input Data Barang</h1>
          <!-- /.card-header -->
          <div class="card-body">
            <!--View Data Shipping-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <form role="form" action="<?=base_url('admin/inventory/inputData')?>" method="post">
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Kode Barang</label>
                        <div class="col-sm-10">
                          <input type="text" name="code" class="form-control" id="input-id-1">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Tipe Barang</label>
                        <div class="col-sm-10">
                          <input type="text" name="type" class="form-control" id="input-id-1">
                        </div>
                      </div>

                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Nama Barang</label>
                        <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="input-id-1">
                        </div>
                      </div>

                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Spesifikasi</label>
                        <div class="col-sm-10">
                        <input type="text" name="spesifikasi" class="form-control" id="input-id-1">
                      </div>

                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">QTY</label>
                        <div class="col-sm-10">
                        <input type="number" name="stock" class="form-control" id="input-id-1">
                      </div>
                      
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="input-id-1">
                      </div>
                      
                      <!-- <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Pengirim</label>
                        <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="input-id-1">
                      </div> -->

                      <!-- <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">Tanggal</label>
                        <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="input-id-1">
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-id-1">No Faktur</label>
                        <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="input-id-1">
                      </div> -->

                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
      </div>
      <!--footer-->
    </div>
  </div>