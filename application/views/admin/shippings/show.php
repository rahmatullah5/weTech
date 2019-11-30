<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Shipping</h1>
          </div><!-- /.col -->
          </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Shipping</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Ship ID</label>
                  <input type="text" class="form-control" placeholder="SM0001" Disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nomor Resi</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Penerima</label>
                  <input type="text" class="form-control" placeholder="Dei Julian" Disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Alamat Penerima</label>
                  <input type="text" class="form-control" placeholder="Jalan Cikutra 204 Bandung" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Ekspedisi</label>
                  <input type="text" class="form-control" placeholder="JNE" Disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nama Kurir</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>Pending</option>
                    <option>Inbound</option>
                    <option>On Progress</option>
                    <option>Delivered</option>
                  </select>
                </div>
              </div>
              <table class="table text-center">
                <tr>
                  <td>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </td>
                </tr>
              </table>
            </div>
            <!--View Data Shipping-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data View</h3>
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
                          <th>ID</th>
                          <th>Nama Penerima</th>
                          <th>Tanggal Dikirim</th>
                          <th>Tanggal Diterima</th>
                          <th>Status</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>SM00001</td>
                          <td>Dei Julian</td>
                          <td>11-7-2019</td>
                          <td>15-7-2019</td>
                          <td>Delivered</td>
                          <td>Delivered</td>
                        </tr>
                        <tr>
                          <td>AS0003</td>
                          <td>Rahmat</td>
                          <td>11-7-2014</td>
                          <td>On Progress</span></td>
                          <td>Courier Delivery</td>
                          <td>Barang Diterima Oleh Deindra</td>
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