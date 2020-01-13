<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Transaction History</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Transaction List</h3>

            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover" id="table-receipt">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Order Status</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Date Transaction</th>
                        <th>Pay By</th>
                        <th>Ship ID</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($result as $data) {?>
                        <tr>
                          <td><?=$data['order_id']?></td>
                          <td><?=$data['order_status']?></td>
                          <td><?=$data['user_id']?></td>
                          <td><?=$data['product_id']?></td>
                          <td><?=$data['date_transaction']?></td>
                          <td><?=$data['pay_by']?></td>
                          <td><?=$data['shipping_id']?></td>
                          <td><?=number_format($data['price'], 2, ',','.')?></td>
                          <td><?=$data['discount']?></td>
                          <td><button type="button" order-id="<?php echo $data['order_id']?>" nominal="<?=$data['price']?>" class="btn btn-info btn-sm action-update" title="Update Status"><i class="fa fa-sync-alt"></i></a></td>
                        </tr>
                      <?php }?>
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

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/id.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<script>
$(document).ready(function(){
    $('#table-receipt').DataTable({
        language        :{
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
        },
        processing 		: true,
        pagingType 		: "simple",
        ordering      : false
    });

    $('.action-update').click(function () {
        action  = $(this);
        id      = $(this).attr('order-id');
        nominal = $(this).attr('nominal');
        bootbox.confirm("Yakin update status ?",function(res){
            if(res){
              $.ajax({
                  type      : "post",
                  url       : "<?= base_url('admin/finance/upstatus')?>",
                  datatType : "JSON",
                  data      : { id : id, nominal : nominal },
                  beforeSend: function(){
                    action.find('i').attr('class','fa fa-spinner fa-spin');
                  },
                  success: function(data){
                    code = data;
                    if(code == 0){
                      Swal.fire({
                          icon: 'success',
                          type: 'success',
                          title: 'Berhasil...',
                          text: 'Berhasil update status !'
                      });
                      window.location = "<?= base_url('admin/finance');?>";
                    }
                    else{
                      action.removeAttr('disabled');
                      action.find('span').attr('class','fa fa-sync-alt');
                      Swal.fire({
                          icon: 'error',
                          type: 'error',
                          title: 'Gagal...',
                          text: 'Gagal update status !'
                      });
                    }
                  },
                  complete    : function(){
                    action.find('span').attr('class','fa fa-sync-alt');
                    action.removeAttr('disabled');
                  }
              });
            }
        });
        
    });

});
</script>