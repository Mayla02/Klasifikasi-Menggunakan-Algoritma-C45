<?php
include "../koneksi.php";
include "alert/loadalert.php";

$id_ih = $_POST["id_ih"]; 
$id_pmt = $_POST["id_pmt"];
$lila_sesudah = $_POST["lila_sesudah"]; 
$keterangan = $_POST["keterangan"]; 

if ($add = mysqli_query($konek, "INSERT INTO hasilakhir (id_ih, id_pmt, lila_sesudah, keterangan ) VALUES 
        ('$id_ih', '$id_pmt', '$lila_sesudah', '$keterangan' )")){
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
                                window.location.replace('hasilakhir.php');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>