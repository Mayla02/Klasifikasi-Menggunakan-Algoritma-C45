<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_hasilakhir = $_POST["id_hasilakhir"];
$id_ih = $_POST["id_ih"]; 
$id_pmt = $_POST["id_pmt"];
$lila_sesudah = $_POST["lila_sesudah"]; 
$keterangan = $_POST["keterangan"];

if($edit = mysqli_query($konek, "UPDATE hasilakhir SET id_ih='$id_ih',
        id_pmt='$id_pmt', 
        lila_sesudah='$lila_sesudah', 
        keterangan='$keterangan' WHERE id_hasilakhir='$id_hasilakhir'")){
 
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
                                window.location.replace('hasilakhir.php');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
