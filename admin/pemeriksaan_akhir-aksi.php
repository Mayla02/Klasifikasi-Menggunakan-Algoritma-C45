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

if ($add = mysqli_query($konek, "INSERT INTO pemeriksaan_akhir (id_pemeriksaan_akhir, id_ih, usia_pemeriksaan_akhir, ukur_lila_pemeriksaan_akhir, bb_pemeriksaan_akhir, tb_pemeriksaan_akhir, imt_pemeriksaan_akhir, id_posyandu, alamat, tgl_pemeriksaan_akhir, status_pemeriksaan_akhir, penanganan_pemeriksaan_akhir) VALUES 
        ('$id_pemeriksaan_akhir', '$id_ih', '$usia_pemeriksaan_akhir', '$ukur_lila_pemeriksaan_akhir', '$bb_pemeriksaan_akhir', '$tb_pemeriksaan_akhir', '$imt_pemeriksaan_akhir', '$id_posyandu', '$alamat', '$tgl_pemeriksaan_akhir', '$status_pemeriksaan_akhir', '$penanganan_pemeriksaan_akhir')")){
        echo " 
        <script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Simpan!!',
                                type: 'success',
                                timer: 1900,
                                showConfirmButton: true
                                });  
                                },90); 
                                window.setTimeout(function(){ 
                                window.location.replace('pemeriksaan_akhir.php');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>