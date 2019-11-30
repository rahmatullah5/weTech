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
                    <input type="hidden" name="receipts_id">
                    <div class="form-group row">
                        <label for="receipt_date" class="col-sm-3 col-form-label">Receipt Date<sup style="color:red"><b>*</b></sup></label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control datePicker readonly" id="receipt_date" name="receipt_date" placeholder="receipt date fill in here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="receipt_code" class="col-sm-3 col-form-label">Receipt Code<sup style="color:red"><b>*</b></sup></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control readonly" id="receipt_code" name="receipt_code" readonly placeholder="receipt code fill in here">
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
                            <input type="text" class="form-control" id="total_amount" name="total_amount" placeholder="amount fill in here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="evidence" class="col-sm-3 col-form-label">Evidence<sup style="color:red"><b>*</b></sup></label>
                        <div class="col-sm-9">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control readonly" id="evidence" name="evidence" readonly  placeholder="evidence fill in here">	
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-xs" id="browse-account" type="button">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="evidence_id" id="evidence_id">
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