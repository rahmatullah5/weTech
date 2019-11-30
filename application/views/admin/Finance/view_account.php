<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Chart Of Account</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">List Chart Of Account</h3>

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
                      <th>ID Account</th>
                      <th>Account Name</th>
                      <th>Header Account</th>
                      <th>Status</th>  
                    </tr>
                  </thead>
                </table>
                <tbody id="show-data"></tbody>
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
<script>
$(document).ready(function(){
    $.ajax({
        url     : "<?php echo site_url();?>/admin/finance/loadList",
        type    : "POST",
        success : function (data) {
            var html;

            var i;
            for(i=0; i<data.length; i++){
                html += '<tr>';
                html += '<td>'+data[i].id_account+'</td>';
                html += '<td>'+data[i].name+'</td>';
                html += '<td>'+data[i].header+'</td>';
                html += '<td>'+data[i].status+'</td>';
                html += '</tr>';
            }
            $('#show_data').html(html);
        }
    });
});
</script>