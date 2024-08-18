<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_ih = $_GET["id_ih"];

if($delete = mysqli_query ($konek, "DELETE FROM ibuhamil WHERE id_ih='$id_ih'")){
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
                                window.location.replace('ibuhamil.php');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>