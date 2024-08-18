<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_ih = $_POST["id_ih"];
$nama_ih = $_POST["nama_ih"];
$usia_ih = $_POST["usia_ih"];
$ukur_lila = $_POST["ukur_lila"]; 
$bb = $_POST["bb"];
$tb = $_POST["tb"];
$id_posyandu = $_POST["id_posyandu"]; 
$alamat = $_POST["alamat"];
$tgl = $_POST["tgl"]; 

if($edit = mysqli_query($konek, "UPDATE ibuhamil SET nama_ih='$nama_ih', usia_ih='$usia_ih', 
        ukur_lila='$ukur_lila', 
        bb='$bb', 
        tb='$tb', 
        id_posyandu='$id_posyandu', 
        alamat='$alamat', 
        tgl='$tgl' WHERE id_ih='$id_ih'")){
 
    echo " 
    <script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Edit',
                                type: 'success',
                                timer: 1500,
                                showConfirmButton: true
                                });  
                                },50); 
                                window.setTimeout(function(){ 
                                window.location.replace('ibuhamil.php');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
