<?php
// Memastikan variabel $_POST['id'] dan $_POST['barang'] telah tersedia sebelum mengaksesnya
if(isset($_POST['submit'])) {
    require_once('database.php');
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $merk = $_POST['merk'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST ['jumlah'];

    // Anda perlu mengimplementasikan fungsi update() dari file database.php
    $sql = "UPDATE barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', merk='$merk', kategori='$kategori', jumlah='$jumlah' WHERE id='$id'";
    $hasil = mysqli_query($dbconnect, $sql);
    if($hasil) {
        header('Location: peminjaman.php'); // "Location" harus ditulis dengan "L" huruf besar // Pastikan untuk menghentikan eksekusi skrip setelah header diterapkan
        exit; // Hentikan eksekusi skrip setelah header diterapkan
    }
} 
?>
