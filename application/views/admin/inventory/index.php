<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inventory Menu</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Menu Inventory -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navinvetory">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Stock Barang <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pengadaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tambah Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Barang Keluar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Laporan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Content Inventory-->
    <p>List Barang</p>
    <form class="form-inline my-2 my-lg-0">
        <div class="input-group input-group-sm col-sm-3">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Nama atau Kode Barang">
          <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div>
    </form>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Stock</th>
          <th scope="col">COGS</th>
          <th scope="col">Harga Jual</th>
          <th scope="col">Desc</th>
          <th scope="col">Act</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>126124</td>
          <td>Asus Zenfone 3</td>
          <td>5</td>
          <td>1000000</td>
          <td>2000000</td>
          <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, recusandae nemo facere officiis similique aut eligendi accusantium temporibus dolorum nostrum asperiores ab tenetur cumque pariatur obcaecati illum totam, blanditiis quae.</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>126124</td>
          <td>Asus Zenfone 4</td>
          <td>10</td>
          <td>1000000</td>
          <td>2000000</td>
          <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, recusandae nemo facere officiis similique aut eligendi accusantium temporibus dolorum nostrum asperiores ab tenetur cumque pariatur obcaecati illum totam, blanditiis quae.</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>126124</td>
          <td>Asus Zenfone 7</td>
          <td>7</td>
          <td>1000000</td>
          <td>2000000</td>
          <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, recusandae nemo facere officiis similique aut eligendi accusantium temporibus dolorum nostrum asperiores ab tenetur cumque pariatur obcaecati illum totam, blanditiis quae.</td>
        </tr>
      </tbody>
    </table>

</div>