<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_posyandu = $_POST["id_posyandu"];
$nama_posyandu = $_POST["nama_posyandu"];
$alamat = $_POST["alamat"]; 

if($edit = mysqli_query($konek, "UPDATE posyandu SET nama_posyandu='$nama_posyandu', alamat='$alamat' 
                        WHERE id_posyandu='$id_posyandu'")){
 
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
                                window.location.replace('posyandu.php');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
