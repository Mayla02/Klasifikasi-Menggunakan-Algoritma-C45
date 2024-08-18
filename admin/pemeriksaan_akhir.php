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
                    <li class="active">Pemeriksaan Akhir</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Pemeriksaan Akhir</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Pemeriksaan Akhir</h3><br>
                                    
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li> 
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>

                                    </ul>                                
                                </div>

                                <a href="pemeriksaan_akhir-add.php"><button class="btn btn-info"><i class="fa fa-plus"></i>Tambah Data</button> </a>

                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="70">No</th>
                                                <th>id_pakhir</th>
                                                <th>nama</th>
                                                <th>usia</th> 
                                                <th>ukur_lila_pakhir</th>
                                                <th>bb_pakhir</th>
                                                <th>tb_pakhir</th> 
                                                <th>imt_pakhir</th>
                                                <th>nama_posyandu</th>
                                                <th>alamat</th> 
                                                <th>tgl_pakhir</th>
                                                <th>status_pakhir</th>
                                                <th>penanganan_pakhir</th>  
                                                <th width="130">Action</th>
                                            </tr>
                                        </thead>

<?php
                        $querymatakuliah = mysqli_query ($konek, "SELECT * FROM pemeriksaan_akhir 
                                                        INNER JOIN ibuhamil ON ibuhamil.id_ih = pemeriksaan_akhir.id_ih
                                                        INNER JOIN posyandu ON posyandu.id_posyandu = pemeriksaan_akhir.id_posyandu");
                        if($querymatakuliah == false){
                            die ("Terdapat Kesalahan : ". mysqli_error($konek));
                        }
                        $no = 0;
                        while($matakuliah = mysqli_fetch_array($querymatakuliah)){
                            $no++;
                            echo "
                            
                                <tr>
                                    <td>$no</td>
                                    <td>$matakuliah[id_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[nama_ih]</td>
                                    <td>$matakuliah[usia_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[ukur_lila_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[bb_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[tb_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[imt_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[nama_posyandu]</td>
                                    <td>$matakuliah[alamat]</td>
                                    <td>$matakuliah[tgl_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[status_pemeriksaan_akhir]</td>
                                    <td>$matakuliah[penanganan_pemeriksaan_akhir]</td> 
                                    <td>
                                    <a href='pemeriksaan_akhir-edit.php?id_pemeriksaan_akhir=$matakuliah[id_pemeriksaan_akhir]' id_pemeriksaan_akhir='$matakuliah[id_pemeriksaan_akhir]'><button class='btn btn-default'><i class='fa fa-pencil'></i></button></a>

                                    <a href='pemeriksaan_akhir-delete.php?id_pemeriksaan_akhir=$matakuliah[id_pemeriksaan_akhir]'<button class='btn btn-warning'><i class='fa fa-trash-o'></i></button></a> 
                                    </td>                                    
                                </tr>

                                ";
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
        
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 13:28:28 GMT -->
</html>






