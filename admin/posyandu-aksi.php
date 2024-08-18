<?php
include "../koneksi.php";
include "alert/loadalert.php";

$id_posyandu = $_POST["id_posyandu"];
$nama_posyandu = $_POST["nama_posyandu"];
$alamat = $_POST["alamat"]; 


if ($add = mysqli_query($konek, "INSERT INTO posyandu (id_posyandu, nama_posyandu, alamat ) VALUES 
        ('$id_posyandu', '$nama_posyandu', '$alamat' )")){
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
                                window.location.replace('posyandu.php');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>