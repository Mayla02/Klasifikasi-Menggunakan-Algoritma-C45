<?php

include "../koneksi.php";
include "alert/loadalert.php";
$Id_User = $_GET["Id_User"];

if($delete = mysqli_query ($konek, "DELETE FROM user WHERE Id_User='$Id_User'")){
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
                                window.location.replace('user.php');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>