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
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if (empty($promo)):
              ?>
              <tr>
                <td colspan="7" align="center">Tidak ada data</td>
              </tr>
              <?php
                endif
              ?>

              <?php
                foreach ($promo as $v):
              ?>
              <tr>
                <td><?=$v->product_id?></td>
                <td><?=$v->name?></td>
                <td><?=$v->price?></td>
                <td>Rp. <?=$v->discount?></td>
                <td>
                  <button onClick='edit(<?=json_encode($v)?>)' class='btn btn-primary btn-sm'>Edit</button>
                  <button onClick='del(<?=$v->product_id?>)' class='btn btn-danger btn-sm'>Hapus</button>
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
        <h5 class="modal-title" id="addModalLabel">Tambah promo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method='post' action="<?=base_url('admin/promo/action_update')?>">
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
          <div class="float-right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit promo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method='post' action="<?=base_url('admin/promo/action_update')?>">
          <input type="hidden" id="editProductId" name="productId">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Potongan</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                  </div>
                  <input type="text" id="editDiscount" name='discount' class="form-control" required>
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

<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<script>
function edit(data) {
  $('#editProductId').val(data.product_id)
  $('#editDiscount').val(data.discount)

  $('#editModal').modal('show')
}

function del(id) {
  var result = confirm("Want to delete?");
  if (result) {
      location.href = "<?=base_url('admin/promo/delete')?>/" + id
  }
}
</script>