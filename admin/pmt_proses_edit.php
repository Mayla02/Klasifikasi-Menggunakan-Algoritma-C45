<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_pmt = $_POST["id_pmt"];
$pmt1 = $_POST["pmt1"];
$pmt2 = $_POST["pmt2"]; 

if($edit = mysqli_query($konek, "UPDATE pmt SET pmt1='$pmt1', pmt2='$pmt2' 
                        WHERE id_pmt='$id_pmt'")){
 
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
                                window.location.replace('pmt.php');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
