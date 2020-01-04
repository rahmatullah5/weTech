<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Promo</h1>
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
      <h3 class="card-title">Data Promo</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    
    <button type="submit" class="btn btn-success mb-3" data-toggle="modal" data-target="#addModal">Tambah Promo</button>
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Harga Normal</th>
                <th>Potongan</th>
                <!-- <th>Image</th> -->
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($promo as $v):
              ?>
              <tr>
                <td><?=$v->product_id?></td>
                <td><?=$v->name?></td>
                <td><?=$v->price?></td>
                <td>Rp. <?=$v->discount?></td>
                <!-- <td><?=$v->image?></td> -->
                <td>
                  <!-- <button class='btn btn-primary btn-sm'>Edit</button> -->
                  <a href='<?=base_url('admin/promo/delete/'.$v->product_id)?>' class='btn btn-danger btn-sm'>Hapus</a>
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
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah promo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method='post'  action="<?=base_url('admin/promo/action_update')?>">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Potongan</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                  </div>
                  <input type="text" name='discount' class="form-control" required>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Produk</label>
                <div class="input-group mb-3">
                  <select class="form-control" name="productId" required>
                    <?php
                      foreach ($products as $v):
                    ?>
                      <option value="<?=$v->product_id?>"><?=$v->name?></option>
                    <?php
                      endforeach
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="float-right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>