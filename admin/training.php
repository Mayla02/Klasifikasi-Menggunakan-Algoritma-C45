<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
} else {
    $Username = $_SESSION['Username'];
}

require_once("../koneksi.php");
$query = mysqli_query($konek, "SELECT * FROM user WHERE Username='$Username'");
$hasil = mysqli_fetch_array($query);

$que = mysqli_query($konek, "SELECT * FROM user ");
$hasi = mysqli_fetch_array($que);
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 13:28:28 GMT -->
<head>        
        <!-- META SECTION -->
        <title>Klasifikasi Ibu Hamil</title>             
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
              
                <?php include 'menu.php'; ?>
           
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                        
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Data Training</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Data Training Ibu Hamil</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Training</h3><br>
                                    
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li> 
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>

                                    </ul>                                
                                </div>

                                <a href="training-add.php"><button class="btn btn-info"><i class="fa fa-plus"></i>Tambah Data</button> </a>
                                <a href="cetak-training.php" target="_blank"><button class="btn btn-default"><i class="fa fa-print"></i>Print</button> </a>

                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr> 
                                                <th>id_training</th>
                                                <th>nama</th>
                                                <th>usia_</th>
                                                <th>alamat</th>
                                                <th>tgl</th>
                                                <th>ukur_lila (cm)</th>   
                                                <th>bb</th>
                                                <th>tb</th>
                                                <th>posyandu</th> 
                                                <th>status</th>  
                                                <th width="130">Action</th>
                                            </tr>
                                        </thead>

                        <?php
                                    // Fungsi untuk melakukan klasifikasi berdasarkan pohon keputusan
                                    function classify($ukuran_lila, $imt, $umur) {
                                        // Klasifikasi berdasarkan ukuran LILA
                                        if ($ukuran_lila < 23.5) {
                                            $lila_class = "Kurang";
                                        } else {
                                            $lila_class = "Normal";
                                        }

                                        // Klasifikasi berdasarkan IMT
                                        if ($imt < 18.5) {
                                            $imt_class = "Kurang";
                                        } elseif ($imt >= 18.5 && $imt <= 22.9) {
                                            $imt_class = "Normal";
                                        } elseif ($imt >= 23 && $imt <= 29.9) {
                                            $imt_class = "Cenderung Obesitas";
                                        } else {
                                            $imt_class = "Obesitas";
                                        }

                                        // Klasifikasi berdasarkan usia
                                        if ($umur < 18 || $umur > 30) {
                                            $usia_class = "Kurang atau Berisiko";
                                        } else {
                                            $usia_class = "Normal";
                                        }

                                        // Menggabungkan klasifikasi
                                        if ($lila_class == "Kurang" || $imt_class == "Kurang" || $usia_class == "Kurang atau Berisiko") {
                                            return "Kurang Energi Kronis (KEK)";
                                        } else {
                                            return "Normal";
                                        }
                                    }

                                    // Fungsi untuk menentukan penanganan berdasarkan status
                                    function getPenanganan($status) {
                                        if ($status == "Normal") {
                                            return "Minum susu, vitamin sesuai dosis";
                                        } elseif ($status == "Kurang Energi Kronis (KEK)") {
                                            return "Harus lebih banyak 2x dari normal seperti minum susu, vitamin dan karbohidrat";
                                        } else {
                                            return "Penanganan tidak diketahui";
                                        }
                                    }

                                    // Koneksi ke database
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "ibuhamil2";

                                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                                    // Periksa koneksi
                                    if (!$conn) {
                                        die("Koneksi gagal: " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM training INNER JOIN posyandu ON training.id_posyandu = posyandu.id_posyandu";
                                    $result = mysqli_query($conn, $sql);

                                    $count_kek = 0;
                                    $count_normal = 0;

                                    if (mysqli_num_rows($result) > 0) {
                                        // Output data dari setiap baris
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $nama_ibu = $row["nama_training"];
                                            $ukur_lila = $row["ukur_lila"];
                                            $bb = $row["bb"];
                                            $tb = $row["tb"];
                                            $usia_ih = $row["usia_training"];

                                            // Hitung IMT
                                            if ($tb > 0) {
                                                $imt = $bb / (($tb / 100) ** 2);
                                            } else {
                                                $imt = 0; // Atau bisa di-set ke nilai default yang sesuai
                                            }

                                            // Lakukan klasifikasi menggunakan pohon keputusan
                                            $klasifikasi = classify($ukur_lila, $imt, $usia_ih);

                                            // Tentukan penanganan berdasarkan status
                                            $penanganan = getPenanganan($klasifikasi);

                                            // Hitung jumlah kategori
                                            if ($klasifikasi == "Kurang Energi Kronis (KEK)") {
                                                $count_kek++;
                                            } else {
                                                $count_normal++;
                                            }

                                            // Tampilkan hasil klasifikasi dan penanganan
                                            echo "
                                                <tr>  
                                                    <td>$row[id_training]</td>
                                                    <td>$row[nama_training]</td>
                                                    <td>$row[usia_training]</td>
                                                    <td>$row[alamat]</td>
                                                    <td>$row[tgl]</td>
                                                    <td>$row[ukur_lila]</td>
                                                    <td>$row[bb]</td>
                                                    <td>$row[tb]</td>                
                                                    <td>$row[nama_posyandu]</td>
                                                    <td>$klasifikasi</td>
                                                 
                                    <td>
                                    <a href='training-edit.php?id_training=$row[id_training]' id_training='$row[id_training]'><button class='btn btn-default'><i class='fa fa-pencil'></i></button></a>

                                    <a href='training-delete.php?id_training=$row[id_training]'<button class='btn btn-warning'><i class='fa fa-trash-o'></i></button></a> 
                                    </td>                                    
                                </tr>

                                "; 
                            }
                        }
                    ?>

                                                                                                     
                                     
                                    </table>
                                </div>
                            </div>
                            

                            <!-- END DEFAULT DATATABLE -->

                            <!-- START SIMPLE DATATABLE -->
                            
                            <!-- END SIMPLE DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <?php include 'logout.php'; ?>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE --> 
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <script>
$(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

        var ctx = document.getElementById('classificationChart').getContext('2d');
        var classificationChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Kurang Energi Kronis (KEK)', 'Normal'],
                datasets: [{
                    label: 'Jumlah Ibu Hamil',
                    data: [<?php echo $count_kek; ?>, <?php echo $count_normal; ?>],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> 
        
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 13:28:28 GMT -->
</html>






