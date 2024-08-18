<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_training = $_GET["id_training"];

if($delete = mysqli_query ($konek, "DELETE FROM training WHERE id_training='$id_training'")){
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
                                window.location.replace('training.php');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>