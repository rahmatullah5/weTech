<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Receipt</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">List Receipt</h3>

            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <!--View Data Finance-->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo site_url();?>/admin/finance/form_receipt'">Create New</button>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Amount</th>
                      <th>Evidence</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                    <tbody id="show-data">
                        <tr>
                            <td>30 November 2019</td>
                            <td>Pengeluaran 1</td>
                            <td>Pengeluaran 1</td>
                            <td>Rp. 1.000.000</td>
                            <td>Pengeluaran 1</td>
                            <td>
                                <!-- <button type="button" class="btn btn-warning" id="show-edit">Edit</button> -->
                                <button type="button" class="btn btn-danger remove-receipt">Hapus</button>
                            </td>
                        </tr>
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
<!-- <script>
$(document).ready(function(){
    $.ajax({
        url     : "<?php echo site_url();?>/admin/finance/loadList",
        type    : "POST",
        success : function (data) {
            var html;

            var i;
            for(i=0; i<data.length; i++){
                html += '<tr>';
                html += '<td>'+data[i].id_Receipt+'</td>';
                html += '<td>'+data[i].name+'</td>';
                html += '<td>'+data[i].header+'</td>';
                html += '<td>'+data[i].status+'</td>';
                html += '</tr>';
            }
            $('#show_data').html(html);
        }
    });
});
</script> -->
<script>
$(document).on('click','.remove-receipt',function(){
                receipts_id 	= $(this).attr('receipts_id');
                title           = $(this).attr('title1');
                bootbox.confirm("Are you sure <b>"+title+"</b> ?",function(res){
                    if(res){
                        $.ajax({
                            url 		: "<?php echo site_url() ?>/admin/finance/",
                            type 		: "POST",
                            data 		: {
                                receipts_id 	: receipts_id
                            },
                            beforeSend	:function(){				
                                $("#remove-receipt").find('span').attr('class','fa fa-trash');
                            },
                            success 	: function(res){
                                $(".toast").remove();
                                if(res.code == 0){
                                    $.toast({
                                        title 	: "Success <span class='fa fa-check' ></span>",
                                        content : "Success removing receipt",
                                        type 	: "success",
                                        delay 	: 5000
                                    });
                                }else{
                                    $.toast({
                                        title 	: "Failed",
                                        content : res.info,
                                        type 	: "warning",
                                        delay 	: 5000
                                    });
                                }
                            },
                            complete 	:function(){
                                $("#table-receipt").DataTable().ajax.reload();	
                            },
                            error 		: function(){
                                $.toast({
                                    title 	: "Warning",
                                    content : "Error. "+title+" has been used in transaction.",
                                    type 	: "warning",
                                    delay 	: 5000
                                });
                            }
                        });
                    }
                });
            });
</script>