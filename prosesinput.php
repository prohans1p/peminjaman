<?php 
$koneksi = mysqli_connect("localhost", "root", "", "peminjaman_barang_vidya") or die;
    require_once("database.php");
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $merk = $_POST['merk'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST ['jumlah'];

    $sql = "INSERT INTO barang (id, merk, kode_barang, nama_barang, kategori, jumlah) VALUES ('$id', '$merk', '$kode_barang', '$nama_barang', '$kategori', '$jumlah')";
    $simpan=mysqli_query($koneksi, $sql);
    if ($simpan) {    
        header('location:peminjaman.php');
    }
    ?>
