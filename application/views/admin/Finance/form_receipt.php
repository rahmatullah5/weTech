<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Receipt</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form Receipt</h3>
        </div>
        <div class="card-body">
                <form action="#" method="post" id="postreceipt">
                    <div class="form-group row">
                        <label for="receipt_date" class="col-sm-3 col-form-label">Receipt Date<sup style="color:red"><b>*</b></sup></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control datePicker readonly" id="created_date" name="created_date" placeholder="receipt date fill in here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title<sup style="color:red"><b>*</b></sup></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="title fill in here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description<sup style="color:red"><b></b></sup></label>
                        <div class="col-sm-9">
                            <textarea id="description" name="description" cols="30" rows="4" class="form-control" placeholder="description fill in here"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total_amount" class="col-sm-3 col-form-label">Total Amount<sup style="color:red"><b>*</b></sup></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="amount" name="amount" placeholder="amount fill in here">
                        </div>
                    </div>
                    <div align="right">
                        <button type="button" onclick="window.location.href='<?php echo site_url();?>/admin/finance/'" class="btn btn-secondary clear">Back</a>
                        <button type="submit" class="btn btn-success ml-1" id="btnSave">
                            Save    
                            <span class="loop"></span>
                        </button>
                    </div>
                </form>
            
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

<script>
    $("#postreceipt").validate({
        rules       : {
            created_date        :   "required",
            title               :   "required",
            amount              :   "required",
            description         :   "required",
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
                url  : "<?php echo base_url('admin/finance/savereceipt')?>",
                dataType : "JSON",
                data : $('#postreceipt').serialize(),
                beforeSend: function(){
                    $("#btnSave").find('span').attr('class','fa fa-spinner fa-spin');
                    $("#btnSave").attr('disabled','true');
                    $("#clear").attr('disabled','true');
                },
                success: function(data){
                    window.location.href="<?php echo base_url('admin/finance');?>";
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

    
    $(document).ready(function () {
        var rp = document.getElementById('amount');
        rp.addEventListener('keyup', function(e) {
            rp.value = formatRupiah(this.value);
        });
            
        rp0.addEventListener('keydown', function(event) {
            limitCharacter(event);
        });

        /* Fungsi */
        function formatRupiah(bilangan, prefix) {
            var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
            split   = number_string.split(','),
            sisa    = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{1,3}/gi);
                
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
                
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? + rupiah : '');
        }
            
        function limitCharacter(event) {
            key = event.which || event.keyCode;
            if ( key != 188 // Comma
                && key != 8 // Backspace
                && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                && (key < 48 || key > 57) // Non digit
                // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
                ) {
                    event.preventDefault();
                    return false;
                }
        } 
    });

</script>