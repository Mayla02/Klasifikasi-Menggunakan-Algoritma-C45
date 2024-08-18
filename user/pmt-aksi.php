<?php
include "../koneksi.php";
include "alert/loadalert.php";

$id_pmt = $_POST["id_pmt"];
$pmt1 = $_POST["pmt1"];
$pmt2 = $_POST["pmt2"]; 


if ($add = mysqli_query($konek, "INSERT INTO pmt (id_pmt, pmt1, pmt2 ) VALUES 
        ('$id_pmt', '$pmt1', '$pmt2' )")){
        echo " 
        <script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Simpan!!',
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

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>