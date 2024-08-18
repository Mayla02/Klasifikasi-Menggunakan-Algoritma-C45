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


if ($add = mysqli_query($konek, "INSERT INTO training (id_training, nama_training, usia_training, ukur_lila, bb, tb, id_posyandu, alamat, tgl) VALUES 
        ('$id_training', '$nama_training', '$usia_training', '$ukur_lila', '$bb', '$tb', '$id_posyandu', '$alamat', '$tgl')")){
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
                                window.location.replace('training.php');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>