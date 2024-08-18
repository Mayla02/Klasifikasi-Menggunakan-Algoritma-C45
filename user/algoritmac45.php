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
<head>        
    <title>Klasifikasi Ibu Hamil</title>             
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>                                     

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>
</head>
<body>
    <div class="page-container">
        <div class="page-sidebar">
            <?php include 'menu.php'; ?>
        </div>
        
        <div class="page-content">
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                </li> 
            </ul>
            
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>                    
                <li class="active">Pohon Keputusan (C45)</li>
            </ul>
            
            <div class="page-title">                    
                <h2><span class="fa fa-arrow-circle-o-left"></span> Pohon Keputusan (C45)</h2>
            </div>                 

            <div class="page-content-wrap">                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">Pohon Keputusan (C45)</h3><br>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li> 
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>                                
                            </div>
 

                            <div class="panel-body">
                                 <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr> 
                                            <th>id_ih</th>
                                            <th>nama_ih</th>
                                            <th>usia_ih</th>
                                            <th>IMT</th> 
                                            <th>ukur_lila (cm)</th>
                                            <th>status</th>  
                                            <th>Penanganan</th> 
                                        </tr>
                                    </thead>

                                    <?php
                                    function classify($ukuran_lila, $imt, $umur) {
                                        if ($ukuran_lila < 23.5) {
                                            $lila_class = "Kurang";
                                        } else {
                                            $lila_class = "Normal";
                                        }

                                        if ($imt < 18.5) {
                                            $imt_class = "Kurang";
                                        } elseif ($imt >= 18.5 && $imt <= 22.9) {
                                            $imt_class = "Normal";
                                        } elseif ($imt >= 23 && $imt <= 29.9) {
                                            $imt_class = "Cenderung Obesitas";
                                        } else {
                                            $imt_class = "Obesitas";
                                        }

                                        if ($umur < 18 || $umur > 30) {
                                            $usia_class = "Kurang atau Berisiko";
                                        } else {
                                            $usia_class = "Normal";
                                        }

                                        if ($lila_class == "Kurang" || $imt_class == "Kurang" || $usia_class == "Kurang atau Berisiko") {
                                            return "Kurang Energi Kronis (KEK)";
                                        } else {
                                            return "Normal";
                                        }
                                    }

                                    function getPenanganan($status) {
                                        if ($status == "Normal") {
                                            return "Minum susu, vitamin sesuai dosis";
                                        } elseif ($status == "Kurang Energi Kronis (KEK)") {
                                            return "Harus lebih banyak 2x dari normal seperti minum susu, vitamin dan karbohidrat";
                                        } else {
                                            return "Penanganan tidak diketahui";
                                        }
                                    }

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "ibuhamil";

                                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                                    if (!$conn) {
                                        die("Koneksi gagal: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT * FROM ibuhamil";
                                    $result = mysqli_query($conn, $sql);

                                    $count_kek = 0;
                                    $count_normal = 0;

                                    $ukur_lila = 0; // True Positives
                                    $TN = 0; // True Negatives
                                    $tb = 0; // False Positives
                                    $usia_ih = 0; // False Negatives

                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $nama_ibu = $row["nama_ih"];
                                            $ukur_lila = $row["ukur_lila"];
                                            $bb = $row["bb"];
                                            $tb = $row["tb"];
                                            $usia_ih = $row["usia_ih"];

                                            if ($tb > 0) {
                                                $imt = $bb / (($tb / 100) ** 2);
                                            } else {
                                                $imt = 0;
                                            }

                                            $klasifikasi = classify($ukur_lila, $imt, $usia_ih);
                                            $penanganan = getPenanganan($klasifikasi);

                                            if ($klasifikasi == "Kurang Energi Kronis (KEK)") {
                                                $count_kek++;
                                                if (isset($row['status']) && $row['status'] == 'KEK') {
                                                    $ukur_lila++; // Kurang Energi Kronis (KEK) terdeteksi dan benar
                                                } else {
                                                    $tb++; // Salah deteksi sebagai KEK
                                                }
                                            } else {
                                                $count_normal++;
                                                if (isset($row['status']) && $row['status'] == 'Normal') {
                                                    $TN++; // Normal terdeteksi dan benar
                                                } else {
                                                    $usia_ih++; // Salah deteksi sebagai Normal
                                                }
                                            }

                                            echo "
                                                <tr> 
                                                    <td>$row[id_ih]</td>
                                                    <td>$row[nama_ih]</td>
                                                    <td>$row[usia_ih]</td>
                                                    <td>" . number_format($imt, 2) . "</td>
                                                    <td>$row[ukur_lila]</td>                
                                                    <td><b>$klasifikasi</b></td>
                                                    <td>$penanganan</td>                                     
                                                </tr>
                                            "; 
                                        }
                                    } 

                                    // Hitung metrik kinerja
                                    $total = $ukur_lila + $bb + $tb + $usia_ih;
                                    $akurasi = $total > 0 ? ($ukur_lila + $bb) / $total : 0;
                                    $presisi = ($ukur_lila + $tb) > 0 ? $ukur_lila / ($ukur_lila + $tb) : 0;
                                    $recall = ($ukur_lila + $usia_ih) > 0 ? $ukur_lila / ($ukur_lila + $usia_ih) : 0;
                                    $f1Score = ($presisi + $recall) > 0 ? 2 * ($presisi * $recall) / ($presisi + $recall) : 0;
                                    ?>
                                </table>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Grafik Klasifikasi Ibu Hamil</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="classificationChart"></canvas>
                                <div class="metrics">
                                    <h4>Confusion Matrix Metrics</h4>
                                    <p><strong>Akurasi:</strong> <?php echo number_format($akurasi * 100, 2) . "%"; ?></p>
                                    <p><strong>Presisi:</strong> <?php echo number_format($presisi * 100, 2) . "%"; ?></p>
                                    <p><strong>Recall:</strong> <?php echo number_format($recall * 100, 2) . "%"; ?></p>
                                    <p><strong>F1 Score:</strong> <?php echo number_format($f1Score, 2); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>                                
            </div>    
        </div>
    </div>

    <?php include 'logout.php'; ?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>

    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>        
    <script type="text/javascript" src="js/actions.js"></script>

    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>        
    <script type="text/javascript" src="js/actions.js"></script>         

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
</html>
