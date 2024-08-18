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
                    <li><a href="#">Hasil Akhir</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->

                <?php
include "../koneksi.php";
$id_hasilakhir = $_GET['id_hasilakhir'];

$querymatakuliah = mysqli_query($konek, "SELECT * FROM hasilakhir 
                            INNER JOIN ibuhamil ON hasilakhir.id_ih = ibuhamil.id_ih
                            INNER JOIN pmt ON hasilakhir.id_pmt = pmt.id_pmt WHERE id_hasilakhir='$id_hasilakhir'");
if($querymatakuliah == false){
  die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($matakuliah = mysqli_fetch_array($querymatakuliah)){

?>
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" action="hasilakhir_proses_edit.php" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit</strong> Hasil Akhir</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6"> 
                                            
                                            <div class="form-group" hidden>
                                                <label class="col-md-3 control-label">id_hasilakhir</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="id_hasilakhir" readonly class="form-control"
                                                        value="<?php echo $matakuliah["id_hasilakhir"]; ?>"/>
                                                    </div>                                             
                                                </div>
                                            </div>   

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">id_ih</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="id_ih" id="id_ih">
                                                        <option value="<?php echo $matakuliah["id_ih"]; ?>">
                                                        <?php echo $matakuliah["id_ih"]; ?> - <?php echo $matakuliah["nama_ih"]; ?></option>
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
                                                <label class="col-md-3 control-label">pmt</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="id_pmt" id="id_pmt">
                                                        <option value="<?php echo $matakuliah["id_pmt"]; ?>">
                                                        <?php echo $matakuliah["id_pmt"]; ?> - <?php echo $matakuliah["pmt1"]; ?></option>
                                                        <?php
include "../koneksi.php"; 
//display values in combobox/dropdown
$result = mysqli_query($konek,"SELECT * FROM pmt");
  while($row = mysqli_fetch_assoc($result)){
     echo "<option value=$row[id_pmt]>$row[pmt1] - $row[pmt2]</option>";
    } 
?>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">lila_sesudah (cm)</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="lila_sesudah" class="form-control"
                                                        value="<?php echo $matakuliah["lila_sesudah"]; ?>"/>
                                                    </div>             
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">keterangan</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="keterangan" id="keterangan">
                                                        <option value="<?php echo $matakuliah["keterangan"]; ?>">
                                                        <?php echo $matakuliah["keterangan"]; ?></option> 
                                                        <option value="Dalam Tahap Review">Dalam Tahap Review</option> 
                                                        <option value="Normal">Normal</option> 
                                                        <option value="Kurang Energi Kronis (KEK)">Kurang Energi Kronis (KEK)</option>  
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
        <!-- END MESSAGE BOX--><?php } ?>

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






