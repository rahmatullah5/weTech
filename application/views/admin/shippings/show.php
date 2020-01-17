<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Shipping</h1>
          </div><!-- /.col -->
          </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Shipping</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <form action='<?=base_url('admin/shippings/update/'.$shipping["shipping_id"])?>'method='post'>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Ship ID</label>
                  <input type="text" class="form-control" value=<?=$shipping['shipping_id']?> disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nomor Resi</label>
                  <input type="text" class="form-control" name="code_resi" value="<?=$shipping['code_resi']?>"  required  <?php echo (empty($order))? 'disabled' : '' ?>>
                </div>
              </div>
<!--               <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Penerima</label>
                  <input type="text" class="form-control" value=<?=$shipping['receiver']?> disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Alamat Pengiriman</label>
                  <input type="text" class="form-control" value=<?=$shipping['depart']?> disabled>
                </div>
              </div>              
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Alamat Penerima</label>
                  <input type="text" class="form-control" value=<?=$shipping['destination']?> disabled>
                </div>
              </div> -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kurir</label>
                  <input type="text" class="form-control" value="<?=$shipping['courier']?>" disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                  <label>Status</label>
                     <input type="text" class="form-control" value="<?=$shipping['status']?>"  disabled>
                     <input type="hidden" class="form-control" value="Sent" name='status'>

                </div>
              </div>              
                    
              
              <table class="table text-center">
                <tr>
                  <td>
                    <!-- <button type="button" class="btn btn-primary">Simpan</button> -->
                    <a href='<?=base_url('admin/shippings/index/')?>' class='btn btn-success btn-sm'>Kembali</a>
                    <?php if (!empty($order)){ ?>
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                    <?php } ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--View Data Shipping-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <table class="table table-hover">
                      <tr>
                        <th>Order ID</th>
                        <th>Order Status</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Transaction Date</th>
                        <th>Pay By</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Receiver</th>
                        <th>No Mobile</th>
                        <th>Address</th>                        
                      </tr>
                      <tr>
                       <?php if (!empty($order)) { ?>
                        <td><?=$order['order_id']?></td>
                        <td><?=$order['order_status']?></td>
                        <td><?=$order['user_id']?></td>
                        <td><?=$order['product_id']?></td>
                        <td><?=$order['date_transaction']?></td>
                        <td><?=$order['pay_by']?></td>
                        <td>Rp. <?=$order['price']?></td>
                        <td><?=$order['discount']?></td>
                        <td><?=$order['receiver']?></td>
                        <td><?=$order['no_mobile']?></td>
                        <td><?=$order['address']?></td>
                      <?php } ?>
                      </tr>
                    </table>           
                  </div>
                  <!-- /.card-header -->
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