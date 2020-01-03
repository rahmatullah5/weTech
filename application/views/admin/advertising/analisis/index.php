<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Analisis</h1>
        </div><!-- /.col -->
        
        <?php
          if (!empty($this->session->flashdata('response'))):
          ?>
          <div class="alert alert-success alert-dismissible fade show" style="position: absolute; right: 0; top: 15; z-index: 9999;" role="alert">
            <strong>Hore! </strong><?=$this->session->flashdata('response')['msg']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
          endif;
          ?>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Data Produk Laris</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($laris as $v):
              ?>
              <tr>
                <td><?=$v['product_id']?></td>
                <td><?=$v['name']?></td>
                <td><?=$v['total']?></td>
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
  </div>

  <!-- Main content -->
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Data Produk Tidak Laris</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($tidakLaris as $v):
              ?>
              <tr>
                <td><?=$v['product_id']?></td>
                <td><?=$v['name']?></td>
                <td><?=$v['total']?></td>
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
  </div>
</div>
