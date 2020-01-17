<div class="content-wrapper">
<?php 
  $month = (isset($_GET['month']) ? $_GET['month'] : '');
  $year = (isset($_GET['year']) ? $_GET['year'] : '' );
?>
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
          <h1 class="m-1 text-dark">Inventory - Reporting 
            <?php if ($month != '') echo "Bulan ".$month?>
            <?php if ($year != '') echo "Tahun ".$year?>
          </h1>
          <!-- /.card-header -->
          <div class="card-body">
            <!--View Data Shipping-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <!-- <p class="m-1 text-dark">Pilih bulan laporan</p>                    
                    <form method="get" action="<?=base_url('admin/inventory/report/filter/')?>"> 
                      <div class="form-row align-items-center"> 
                        <div class="col-md-2">
                          <select name="month" class="form-control" id="exampleFormControlSelect1">
                            <option value="">Semua</option>
                            <option <?php if ($month == "01") echo "selected";?> value="01">Januari</option>
                            <option <?php if ($month == "02") echo "selected";?> value="02">Februari</option>
                            <option <?php if ($month == "03") echo "selected";?> value="03">Maret</option>
                            <option <?php if ($month == "04") echo "selected";?> value="04">April</option>
                            <option <?php if ($month == "05") echo "selected";?> value="05">Mei</option>
                            <option <?php if ($month == "06") echo "selected";?> value="06">Juni</option>
                            <option <?php if ($month == "07") echo "selected";?> value="07">Juli</option>
                            <option <?php if ($month == "08") echo "selected";?> value="08">Agustus</option>
                            <option <?php if ($month == "09") echo "selected";?> value="09">September</option>
                            <option <?php if ($month == "10") echo "selected";?> value="10">Oktober</option>
                            <option <?php if ($month == "11") echo "selected";?> value="11">November</option>
                            <option <?php if ($month == "12") echo "selected";?> value="12">Desember</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <select name="year" class="form-control" id="exampleFormControlSelect1">
                            <option value="">Semua</option>
                            <option <?php if ($year == "2017") echo "selected";?>>2017</option>
                            <option <?php if ($year == "2018") echo "selected";?>>2018</option>
                            <option <?php if ($year == "2019") echo "selected";?>>2019</option>
                            <option <?php if ($year == "2020") echo "selected";?>>2020</option>
                            <option <?php if ($year == "2021") echo "selected";?>>2021</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <button type="submit" class="btn btn-default">OK </button>
                        </div>
                      </div>
                    </form> -->
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Spesifikasi</th>
                          <th>Masuk</th>
                          <th>Keluar</th>
                          <th>Sisa</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      // var_dump($inventory->result());
                        foreach ($inventory->result() as $key => $data) { 
                          $masuk = ($data->masuk!=null || $data->masuk !== ''? $data->masuk : "0"); 
                          $keluar = ($data->keluar!=null ? $data->keluar : "0");
                      ?>
                        <tr>
                          <td><?php echo $key+1;?></td>
                          <td><?php echo $data->code;?></td>
                          <td><?php echo $data->name;?></td>
                          <td><?php echo $data->type;?></td>
                          <td><?php echo $masuk;?></td>
                          <td><?php echo $keluar;?></td>
                          <td><?php echo $data->stock;?></td>
                        </tr>
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