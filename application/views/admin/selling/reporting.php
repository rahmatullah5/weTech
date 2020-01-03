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
					                        <th>
						                        <div class="custom-control custom-checkbox">
						                          	<input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
						                          	<label for="customCheckbox1" class="custom-control-label"></label>
						                        </div>
					                        </th>
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
				                        <?php
				                          	foreach ($orders as $v):
				                        ?>
				                        <tr>
				                          	<td></td>
				                          	<td><?=$v->order_id?></td>
				                          	<td><?=$v->order_status?></td>
				                          	<td><?=$v->user_id?></td>
				                          	<td><?=$v->product_id?></td>
				                          	<td><?=$v->date_transaction?></td>
				                          	<td><?=$v->pay_by?></td>
				                          	<td><?=$v->ship_id?></td>
				                          	<td><?=$v->price?></td>
				                          	<td><?=$v->discount?></td>
				                         	
				                         	<td>
				                         		-
				                            	<!-- <a href='<?=base_url('admin/shippings/show/'.$v->shipping_id)?>' class='btn btn-primary btn-sm'>Detail</a>
				                            	<a href='<?=base_url('admin/shippings/destroy/'.$v->shipping_id)?>' class='btn btn-danger btn-sm'>Hapus</a> -->
				                          	</td>
				                        </tr>

				                        <?php
				                          endforeach
				                        ?>                        
			                      	</tbody>
			                    </table>
	                  		</div>
	                	</div>
	              	</div>
	            </div>
            <!-- /.col -->
            	<a href="<?=base_url('admin/shippings/show')?>" class="nav-link"><button class="btn btn-primary">Print</button></a>
          	</div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
</div>
