<?php
$konek = mysqli_connect("localhost","root","","portofolio");
$hasil = mysqli_query($konek , "SELECT * FROM user");
$hasill = mysqli_query($konek , "SELECT * FROM about");

function data($isi){
global $konek;
$project = mysqli_query($konek ,$isi); 
$box = [];
while ($keluarkan = mysqli_fetch_assoc($project))
{
    $box[] = $keluarkan;
} 
return $box;
}
function tambah($data){
    global $konek;
    $email = $_POST["email"];
    $nama = $_POST["nama_k"];
    $pesan = $_POST["pesan_k"];
    $query = "INSERT INTO contact
             VALUES
             ('','$email','$nama','$pesan')
             ";
            mysqli_query ($konek, $query);
            return mysqli_affected_rows($konek);
}
?>