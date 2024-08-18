<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_hasilakhir = $_GET["id_hasilakhir"];

if($delete = mysqli_query ($konek, "DELETE FROM hasilakhir WHERE id_hasilakhir='$id_hasilakhir'")){
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
                                window.location.replace('hasilakhir.php');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>