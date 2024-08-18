<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_pmt = $_GET["id_pmt"];

if($delete = mysqli_query ($konek, "DELETE FROM pmt WHERE id_pmt='$id_pmt'")){
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
                                window.location.replace('pmt.php');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>