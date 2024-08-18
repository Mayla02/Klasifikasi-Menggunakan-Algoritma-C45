<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_training = $_POST["id_training"];
$nama_training = $_POST["nama_training"];
$usia_training = $_POST["usia_training"];
$ukur_lila = $_POST["ukur_lila"]; 
$bb = $_POST["bb"];
$tb = $_POST["tb"];
$id_posyandu = $_POST["id_posyandu"]; 
$alamat = $_POST["alamat"];
$tgl = $_POST["tgl"];

if($edit = mysqli_query($konek, "UPDATE training SET nama_training='$nama_training', usia_training='$usia_training', 
        ukur_lila='$ukur_lila', 
        bb='$bb', 
        tb='$tb', 
        id_posyandu='$id_posyandu', 
        alamat='$alamat', 
        tgl='$tgl' WHERE id_training='$id_training'")){
 
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
                                window.location.replace('training.php');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
