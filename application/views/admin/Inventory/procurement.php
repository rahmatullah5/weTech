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
          <h1 class="m-1 text-dark">Inventory - List Analisa Pengadaan Barang</h1>
          <!-- /.card-header -->
          <div class="card-body">
            <!--View Data Shipping-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover">                    
                        <thead>
                        <div class="input-group input-group-sm">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                        </div> 
                        <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Spesifikasi</th>
                          <th>QTY</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($inventory->result() as $key => $data) { ?>
                        <tr>
                          <td><?php echo $key+1;?></td>
                          <td><?php echo $data->code;?></td>
                          <td><?php echo $data->name;?></td>
                          <td><?php echo $data->type;?></td>
                          <td><?php echo $data->stock;?></td>
                          <td style="vertical-align:middle;">
                             <a href="#" data-toggle="modal" data-target="#modalEdit<?php echo $data->product_id; ?>"><button class="btn btn-success">Tambah</button></a>
                          </td>
                        </tr>

                        <!-- Modal Edit -->
                          <div class="modal fade" id="modalEdit<?php echo $data->product_id; ?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Tambah <b><?php echo $data->name.' - '.$data->code; ?></b></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" action="<?=base_url('admin/inventory/procurementAdd/'.$data->product_id)?>" method="post">
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="input-id-1">Jumlah</label>
                                      <div class="col-sm-10">
                                        <input type="hidden" name="qty_" value="<?php echo $data->stock;?>">
                                        <input type="number" name="qty" class="form-control" id="input-id-1">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="input-id-1">Pengirim</label>
                                      <div class="col-sm-10">
                                      <input type="text" name="pengirim" class="form-control" id="input-id-1">
                                    </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="input-id-1">No Faktur</label>
                                      <div class="col-sm-10">
                                      <input type="text" name="no_faktur" class="form-control" id="input-id-1">
                                    </div>

                                    <div class="modal-footer">  
                                      <button type="submit" class="btn btn-success">Tambah</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- Modal Edit End -->
                        <?php } ?>
                      </tbody>
                    </table>
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

  <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>