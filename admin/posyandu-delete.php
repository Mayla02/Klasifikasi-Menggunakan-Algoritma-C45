<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_posyandu = $_GET["id_posyandu"];

if($delete = mysqli_query ($konek, "DELETE FROM posyandu WHERE id_posyandu='$id_posyandu'")){
	echo " 
	<script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Hapus!!',
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
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>