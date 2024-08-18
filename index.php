<?php
session_start();
include "koneksi.php";

// Notif Error
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
    switch ($_GET ["Err"]){
        case 1:
            $Err = "Username dan Password Kosong";
        break;
        case 2:
            $Err = "Username Kosong";
        break;
        case 3:
            $Err = "Password Kosong";
        break;
        case 4:
            $Err = "Password salah";
        break;
        case 5:
            $Err = "Username atau Password salah";
        break;
        case 6:
            $Err = "Maaf, Terjadi Kesalahan";
        break;
    }
}


// Notif
$Notif = "";
if(isset ($_GET["Notif"]) && !empty ($_GET["Notif"])){
    switch($_GET["Notif"]){
        case 1:
            $Notif = "User berhasil dibuat, silahkan Login";
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/pages-login-website-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 13:28:07 GMT -->
<head>        
        <!-- META SECTION -->
        <title>Klasifikasi Ibu Hamil</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="admin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown"> 
                <div class="login-body">
                    <div class="login-title"><strong>Klasifikasi Ibu Hamil</strong> Berbasis Web</div>
                    <form action="auth.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="Username" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="Password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                         
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div> 
                     
                    
                    </form>
                </div>
                     
                        <center>&copy; 2024 Klasifikasi Ibu Hamil Berbasis Web</center>
                     
             
            </div>
            
        </div>
        
    </body> 
</html>












