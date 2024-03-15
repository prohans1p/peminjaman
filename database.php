<?php 

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'peminjaman_barang_vidya');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die ("Failed to connect to MySQL:" . mysqli_error ($dbconnect));
function kuery($kueri)
{
    global $dbconnect;
    $result=mysqli_query($dbconnect,$kueri);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[]=$row;
    }
    return $rows;
}

  

    function inputdata( $tabel, $id, $kode_barang, $nama_barang, $merk, $kategori, $jumlah )
    {
        global $dbconnect;
        $sql=mysqli_query($dbconnect,$inputdata);
        return $sql;
    }

    function editdata($barang,$id)
    {
        global $dbconnect;
        $hasil=mysqli_query($dbconnect,"SELECT * FROM $barang where id='$id'");
        return $hasil;
    }

    function update( $tabel, $id, $kode_barang, $nama_barang, $merk, $kategori, $jumlah )
{
    global $dbconnect;
    $sql = "UPDATE $barang FROM id = '$id', kode_barang='$kode_barang', nama_barang = '$nama_barang', merk='$merk' , kategori='$kategori', jumlah='$jumlah'";
    $hasil=mysqli_query($dbconnect,$sql);
    return $hasil;
}

function Delete($barang,$id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect,"DELETE FROM $barang WHERE id='$id'");
    return $hasil;
} 

function cek_login($username,$password){
    global $dbconnect;
    $uname = $username;
    $upass = $password;

    $hasil = mysqli_query($dbconnect,"SELECT * from user where username='$uname' and password='$upass'");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0 ){
        return true;
    }
    else {
        return false;
    }
}

?>