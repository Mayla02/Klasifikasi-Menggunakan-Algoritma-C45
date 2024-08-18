<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_pemeriksaan_akhir = $_POST["id_pemeriksaan_akhir"];
$id_ih = $_POST["id_ih"];
$usia_pemeriksaan_akhir = $_POST["usia_pemeriksaan_akhir"];
$ukur_lila_pemeriksaan_akhir = $_POST["ukur_lila_pemeriksaan_akhir"]; 
$bb_pemeriksaan_akhir = $_POST["bb_pemeriksaan_akhir"];
$tb_pemeriksaan_akhir = $_POST["tb_pemeriksaan_akhir"];
$imt_pemeriksaan_akhir = $_POST["imt_pemeriksaan_akhir"]; 
$id_posyandu = $_POST["id_posyandu"];
$alamat = $_POST["alamat"]; 
$tgl_pemeriksaan_akhir = $_POST["tgl_pemeriksaan_akhir"]; 
$status_pemeriksaan_akhir = $_POST["status_pemeriksaan_akhir"]; 
$penanganan_pemeriksaan_akhir = $_POST["penanganan_pemeriksaan_akhir"]; 

if($edit = mysqli_query($konek, "UPDATE pemeriksaan_akhir SET id_ih='$id_ih', usia_pemeriksaan_akhir='$usia_pemeriksaan_akhir', 
        ukur_lila_pemeriksaan_akhir='$ukur_lila_pemeriksaan_akhir', 
        bb_pemeriksaan_akhir='$bb_pemeriksaan_akhir', 
        tb_pemeriksaan_akhir='$tb_pemeriksaan_akhir', 
        imt_pemeriksaan_akhir='$imt_pemeriksaan_akhir', 
        id_posyandu='$id_posyandu', 
        alamat='$alamat', 
        tgl_pemeriksaan_akhir='$tgl_pemeriksaan_akhir', 
        status_pemeriksaan_akhir='$status_pemeriksaan_akhir', 
        penanganan_pemeriksaan_akhir='$penanganan_pemeriksaan_akhir' WHERE id_pemeriksaan_akhir='$id_pemeriksaan_akhir'")){
 
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
                                window.location.replace('pemeriksaan_akhir.php');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
