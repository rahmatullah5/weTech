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
                            <input type="text" class="form-control" name="id_mentee" id="id_mentee" placeholder="id mentee isi disini">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3">Account Code</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="account_code" id="account_code" placeholder="account code fill in here">
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

<script type="text/javascript">
    $(document).on('click','.showmodal-edit',function(){
        var fakultas  =   $(this).attr('fakultas');
        getjurusan(fakultas);
        $('#id_account').val($(this).attr('id-account'));
        $('#account_name').val($(this).attr('account_name'));
        $('#account_code').val($(this).attr('account_code'));
        $('#parent_account').val($(this).attr('parent_account'));
        $('#show-add').modal('show');
    });

    $(document).on('click','.showmodal-add',function(){
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
            serverSide 		: true,
            processing 		: true,
            pagingType 		: "simple",
            ajax: {
                url: "<?php echo base_url('admin/finance/loadList')?>",
                type: "POST",
            },
            columns: [
                { data: "account_code"},
                { data: "account_name"},
                { data: "parent_account"},
                { data: "Action",
                    render: function(data, type, row, meta) {
                        txt = '';
                        /* button Edit Group */
                        txt 	+= '<button ';
                        txt 	+= '	title 			= "Edit ."';
                        txt 	+= '	class			= "btn btn-warning btn-xs showmodal-edit"';
                        txt 	+= '	id-account   	= "'+row.id_account+'"';
                        txt 	+= '	account_code    = "'+row.account_code+'"';
                        txt 	+= '	account_name    = "'+row.account_name+'"';
                        txt 	+= '	prent_accunt    = "'+row.parent_account+'"';
                        txt     += '    data-toggle="tooltip" data-placement="top"';
                        txt 	+= '>';
                        txt 	+= '	<span class= "fa fa-pencil"></span>';
                        txt 	+= '</button> ';
                        return txt;
                    }
                },
            ],
            columnDefs      : [ 
                { className	: "text-center", targets: [4], orderable: false, searchable: false}
            ],
            initComplete: function() {
                $('[data-toggle="tooltip"]').tooltip();
            }
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
                    $("#table-account").DataTable().ajax.reload();
                    $('#show-add').modal('hide');
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