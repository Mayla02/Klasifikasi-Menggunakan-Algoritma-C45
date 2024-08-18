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
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/form-layouts-two-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 13:28:19 GMT -->
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
                    <li><a href="#">Pemeriksaan Akhir</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" action="pemeriksaan_akhir-aksi.php" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Tambah</strong> Pemeriksaan Akhir</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                 
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-8">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">id_pemeriksaan_akhir</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="id_pemeriksaan_akhir" class="form-control"/>
                                                    </div>                                             
                                                </div>
                                            </div> 

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">nama_pemeriksaan_akhir</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="id_ih" id="id_ih">
                                                        <option hidden>Pilih Nama</option>
                                                        <?php
include "../koneksi.php"; 
//display values in combobox/dropdown
$result = mysqli_query($konek,"SELECT * FROM ibuhamil");
  while($row = mysqli_fetch_assoc($result)){
     echo "<option value=$row[id_ih]>$row[id_ih] - $row[nama_ih]</option>";
    } 
?>
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">usia_pemeriksaan_akhir</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="usia_pemeriksaan_akhir" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">ukur_lila_pemeriksaan_akhir</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="ukur_lila_pemeriksaan_akhir" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">bb_pemeriksaan_akhir</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="bb_pemeriksaan_akhir" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">tb_pemeriksaan_akhir</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="tb_pemeriksaan_akhir" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">imt_pemeriksaan_akhir</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="imt_pemeriksaan_akhir" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div> 

                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">id_posyandu</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="id_posyandu" id="id_posyandu">
                                                        <option hidden>Pilih Posyandu</option>
                                                        <?php
include "../koneksi.php"; 
//display values in combobox/dropdown
$result = mysqli_query($konek,"SELECT * FROM posyandu");
  while($row = mysqli_fetch_assoc($result)){
     echo "<option value=$row[id_posyandu]>$row[id_posyandu] - $row[nama_posyandu]</option>";
    } 
?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">alamat</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="alamat" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">tgl_pemeriksaan_akhir</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="date" name="tgl_pemeriksaan_akhir" class="form-control"/>
                                                    </div>             
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">status_pemeriksaan_akhir</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="status_pemeriksaan_akhir" id="status_pemeriksaan_akhir">
                                                        <option hidden>Pilih Status</option>
                                                        <option value="Kurang Energi Kronis (KEK)">Kurang Energi Kronis (KEK)</option>
                                                        <option value="Normal">Normal</option> 
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">penanganan_pemeriksaan_akhir</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="penanganan_pemeriksaan_akhir" id="penanganan_pemeriksaan_akhir">
                                                        <option hidden>Pilih Penanangan</option>
                                                        <option value="Minum susu, vitamin sesuai dosis">Minum susu, vitamin sesuai dosis</option>
                                                        <option value="Harus lebih banyak 2x dari yg normal seperti minum susu, vitamin, dan karbohidrat">Harus lebih banyak 2x dari yg normal seperti minum susu, vitamin, dan karbohidrat</option> 
                                                    </select>
                                                </div>
                                            </div>

                                               

                                           <!-- <div class="form-group">
                                                <label class="col-md-3 control-label">Foto</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <input type="file" class="fileinput btn-primary" name="file" id="file" title="Browse File"/>
                                                    <span class="help-block">*Hanya bisa format .JPG .JPEG .PNG</span>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Datepicker</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="2014-11-01">                                            
                                                    </div>
                                                    <span class="help-block">Click on input field to get datepicker</span>
                                                </div>
                                            </div>-->



                                            
                                             
                                            
                                             

                                            
                                        </div>
                                        
                                    </div>

                                </div>

                                
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE --> 
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/form-layouts-two-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 13:28:19 GMT -->
</html>






