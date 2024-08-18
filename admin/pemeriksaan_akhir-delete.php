<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_pemeriksaan_akhir = $_GET["id_pemeriksaan_akhir"];

if($delete = mysqli_query ($konek, "DELETE FROM pemeriksaan_akhir WHERE id_pemeriksaan_akhir='$id_pemeriksaan_akhir'")){
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
                                window.location.replace('pemeriksaan_akhir.php');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>