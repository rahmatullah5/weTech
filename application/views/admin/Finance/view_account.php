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
                <button type="button" class="btn btn-primary" id="showmodal-add">Create New</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover" id="table-account" width="100%">
                  <thead>
                    <tr>
                      <th>Account Code</th>
                      <th>Account Name</th>
                      <th>Parent Account</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $data) {?>
                        <tr>
                            <td><?php echo $data['account_code']?></td>
                            <td><?php echo $data['nama']?></td>
                            <td><?php echo $data['parent_account']?></td>
                            <td><button type="button" class="btn btn-warning showmodal-edit" id-account="<?php echo $data['id_account']?>" account_name="<?php echo $data['nama']?>" account_code="<?php echo $data['account_code']?>" parent_account="<?php echo $data['parent_account']?>"><span class="fa fa-edit"></span></button></td>
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

<!-- Modal Create-->
<div class="modal fade" id="show-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="postmentee" method="post">
                    <div class="form-group row" hidden>
                        <label for="nama" class="col-sm-3">ID Mentee</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_account" id="id_account" placeholder="id mentee isi disini">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3">Account Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_code" id="account_code" placeholder="account code fill in here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3">Account Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_name" id="account_name" placeholder="account name fill in here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3">Parent Account</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="parent_account" id="parent_account" placeholder="parent account fill in here" maxlength="10">
                        </div>
                    </div>
                    <div align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="clear">Close</button>
                        <button type="submit" class="btn btn-success" id="btnSave">Save<span class="loop"></span></button>
                    </div>
                </form>
            </div>
        </div>
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
<script type="text/javascript">
    $(document).on('click','.showmodal-edit',function(){
        $('#account_code').attr('readonly','true');
        $('#id_account').val($(this).attr('id-account'));
        $('#account_name').val($(this).attr('account_name'));
        $('#account_code').val($(this).attr('account_code'));
        $('#parent_account').val($(this).attr('parent_account'));
        $('#show-add').modal('show');
    });

    $(document).on('click','#showmodal-add',function(){
        var validator = $("#postmentee").validate();
        $('#postmentee')[0].reset();
        validator.resetForm();
        $('#show-add').modal('show');
    });
    $(document).ready(function(){
        $("#nav_finance").addClass('active');//attr('class','active'); 
        $('#table-account').DataTable({
            language        :{
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
            },
            processing 		: true,
            pagingType 		: "simple",
        });
    });

    $("#postmentee").validate({
        rules       : {
            account_code        :   {
                required        : true,
                number          : true, 
            },
            account_name        :   "required",
            parent_account      :   "required",
        },
        errorClass              : "text-danger",
        errorElement            : "b",
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        errorPlacement          : function(error,element){
            error.addClass('text-danger');
            element.closest('.form-group').append(error);
            if (element.attr("name") == "account_name" ) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler           : function(form){
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/finance/saveaccount')?>",
                dataType : "JSON",
                data : $('#postmentee').serialize(),
                beforeSend: function(){
                    $("#btnSave").find('span').attr('class','fa fa-spinner fa-spin');
                    $("#btnSave").attr('disabled','true');
                    $("#clear").attr('disabled','true');
                },
                success: function(data){
                    window.location.href="<?php echo base_url('admin/finance/view_account');?>";
                    Swal.fire({
                        icon: 'success',
                        type: 'success',
                        title: 'Berhasil...',
                        text: 'Berhasil menyimpan !'
                    });
                },
                error       : function () {
                    Swal.fire({
                        icon: 'error',
                        type: 'error',
                        title: 'Oops...',
                        text: 'Gagal menyimpan !'
                    });
                },
                complete    : function(){
                    $("#btnSave").find('span').attr('class','loop');
                    $("#btnSave").removeAttr('disabled');
                    $("#clear").removeAttr('disabled');
                }
            });
        }
    });
</script>