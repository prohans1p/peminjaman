<?php
 require_once("database.php");
 $tampil = kuery("select * from peminjaman")
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>peminjaman barang</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <body class="sb-nav-fixed">
    <?php
     session_start();
     if($_SESSION['status']!="login"){
       header("location:login.php?msg=belum_login");
     }
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php">Peminjaman Barang</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="member.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Barang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="peminjamanmember.php">peminjaman</a>
                                    <a class="nav-link" href="pengembalianmember.php">pengembalian</a>
                                </nav>
                            </div>
                           
                            
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
           
                                        </nav>
                                    </div>
                                    
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                          
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">peminjaman barang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="member.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">peminjaman barang</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">        
                               <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                    <h1> DATA BARANG </h1>
                                    </div>
                            
                                    <div class="col-sm">
                                            <!-- Button trigger modal -->
 
                                    </div>
                                </div>
                                </div> <hr>

                            <div class="card-body">
                                <table id="datatablesSimple" class="table" >
                                <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>id</th>
                                            <th>tanggal peminjaman</th>
                                            <th>tanggal kembali</th>
                                            <th>no identitas</th>
                                        </tr>
                                        </thead>
                                        <?php $i = 1; ?>
                                        <?php 
                                      foreach ($tampil as $data):
                                        ?>
                                    <tbody>
                                        <tr>
                                            <td><?php  $i; ?></td>            
                                            <td><?php echo"$data[id]" ?></td>
                                            <td><?php echo"$data[tgl_peminjam]" ?></td>
                                            <td><?php echo"$data[tgl_kembali]" ?></td>
                                            <td><?php echo"$data[no_identitas]" ?></td>
                                           
                                            <td>        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > kembali
<?php echo"<a href='edit.php?id=$data[id]'>"; ?></button>

<?php
// Pastikan file ini memiliki akses ke database.php
require_once('database.php');

// Cek apakah ada ID barang yang diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data barang berdasarkan ID menggunakan fungsi dari database.php
    // Contoh, asumsikan fungsi getDataBarangById() dari database.php digunakan
    $data = getDataBarangById($id);

    // Pastikan data barang ditemukan sebelum melanjutkan
    if ($data) {
        // ...
    } else {
        // Tangani jika data barang tidak ditemukan
        echo "Data barang tidak ditemukan.";
    }
}
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">pengembalian barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="update.php" method="POST" >
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <div class="form-group">
    <label for="nama_barang" value="">id</label>
    <input type="text" class="form-control" id="id" aria-describedby="id" name="id" value="<?php echo $data['id']; ?>">
  </div>
  <div class="form-group">
    <label for="nama_barang" value="">kode barang</label>
    <input type="text" class="form-control" id="" aria-describedby="" name="kode_barang" value="<?php echo $data['kode_barang']; ?>">
  </div>
  <div class="form-group">
    <label for="kategori" value="">nama barang</label>
    <input type="text"  class="form-control" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">merk</label>
    <input type="text" class="form-control"  name="merk" value="<?php echo $data['merk'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">kategori</label>
    <input type="text" class="form-control"  name="kategori" value="<?php echo $data['kategori'] ?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $data['jumlah'] ?>">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" >kembali</button>
      </div>
</form>
      </div>

    </div>
  </div>
</div> </td>
                                        </tr>
                                        <?php endforeach; $i++; ?>
                                    </tbody>
                                </table>
                         
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

