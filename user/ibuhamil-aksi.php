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


if ($add = mysqli_query($konek, "INSERT INTO ibuhamil (id_ih, nama_ih, usia_ih, ukur_lila, bb, tb, id_posyandu, alamat, tgl) VALUES 
        ('$id_ih', '$nama_ih', '$usia_ih', '$ukur_lila', '$bb', '$tb', '$id_posyandu', '$alamat', '$tgl')")){
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
                                window.location.replace('ibuhamil.php');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>