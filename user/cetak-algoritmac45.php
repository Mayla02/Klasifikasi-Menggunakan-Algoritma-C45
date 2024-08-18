<?php
include "../vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4',]);

ob_start();
    ?>
    <?php 
echo " 
       <style type='text/css'>
       .main-wrapper a {
            text-decoration: none;
            color: #3586b7;
        }
        .main-wrapper a.text-link:hover {
            border-bottom: 1px dashed #CCCCCC;
        }
        .tutorial-link-wrapper {
            text-align: center;
        }
        header {
            padding: 10px 30px 7px 30px;
            border-bottom: 2px solid #636b71;
            background: #343d44;
        }
        footer {   
            background: #343d44;
            padding: 10px 0 7px 30px;
            color: #b9bfc3;
            font-size: 10px;
        }
        footer a {
            color: #b9bfc3;
            text-decoration: none;
            margin-left: 10px;
        }
        .link-header {
            margin-top: 10px;
        }
        .link-header a {
            font-size: 10px;
            color: #b9bfc3;
            text-decoration: none;
            margin: 0;
        }
        .link-header a.home:hover {
            color: #b9bfc3;
        }
        .main-wrapper {
            padding: 25px 0;
        }
        .link-header {
            float: right;
        }
        .clearfix {
            clear: both;
        }
        @media screen and (max-width: 450px) {
            header,
            footer {
                text-align: center;
            }
            .link-header {
                float: none;
                margin: 0;
            }
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 10px;
        }

        table td {
            transition: all .5s;
        }
        .table-wrapper {
            overflow: auto;
        }
        .main-wrapper {
            padding: 20px;
        }
        .main-wrapper a:hover {
            border-bottom: 1px dashed #CCCCCC;
        }
        
        /* Table */
        .demo-table {
            border-collapse: collapse;
            font-size: 10px;
            min-width: 537px;
        }

        .demo-table th, 
        .demo-table td {
            border: 0px solid #e1edff;
            padding: 5px 15px;
        }
        .demo-table caption {
            margin: 7px;
        }

        /* Table Header */
        .demo-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .demo-table tbody td {
            color: #353535;
        }
        .demo-table tbody td:first-child,
        .demo-table tbody td:nth-child(4),
        .demo-table tbody td:last-child {
            text-align: right;
        }

        .demo-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .demo-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .demo-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .demo-table tfoot th:first-child {
            text-align: left;
        }
        .demo-table tbody td:empty
        {
            background-color: #ffcccc;
        }
        
        /* Table 2 */
        .demo-table2 {
            border-collapse: collapse;
            font-size: 10px;
            min-width: 536px;
            font-family:Times New Roman;
        }

        .demo-table2 th, 
        .demo-table2 td {
            padding: 7px 17px;
            font-family:Times New Roman;
        }
        .demo-table2 caption {
            margin: 7px;
        }

        .demo-table2 thead th:last-child,
        .demo-table2 tfoot th:last-child,
        .demo-table2 tbody td:last-child {
            border: 0;
        }

        /* Table Header */
        .demo-table2 thead th {
            border-right: 1px solid #c7ecc7;
            text-transform: uppercase;
            font-family:Times New Roman
        }

        /* Table Body */
        .demo-table2 tbody td {
            color: #353535;
            border-right: 1px solid #c7ecc7;
        }
        .demo-table2 tbody tr:nth-child(odd) td {
            background-color: #f4fff7;
        }
        .demo-table2 tbody tr:nth-child(even) td {
            background-color: #dbffe5;
        }
        .demo-table2 tbody td:nth-child(4),
        .demo-table2 tbody td:first-child,
        .demo-table2 tbody td:last-child {
            text-align: right;
        }
        .demo-table2 tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .demo-table2 tfoot th {
            border-right: 1px solid #5675;
            text-align: right;
        }





            table {
                background: #fff;
                padding: 5px;
            }
             td,th {
                border: table-cell;
                border: 1px  solid #444;
            }
            th {
                font-weight: bold;
            }

            tr,td {tr,
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;

                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 58%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 2px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 100px;
                    height: 150px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 18px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                border-bottom: 2px solid #363636;
                width: 20px;
                    height: 115px;
            }

             .separator1 {
                border-bottom: 5px solid #363636;
                width: 20px;
                    height: 5px;
            }
            body { font-family: Times New Roman; font-size: 12.7px }
.pos { position: absolute; z-index: 0; left: 9px; top: 0px }
        </style>

        <html>
        <head>

        <body>
";

                
if(!empty($logo)){
                        echo '<img class="logodisp" src="kps.png'.$logo.'"/>';
                    } else {
                        echo '<div class="logodisp" id="_0:0" style="top:0">
<img name="_1301:851" src="../kps.png" height="1501" width="250" border="0" usemap="#Map"></div>';
                    }
                    echo '

<div class="pos" id="_378:102" style="top:80;left:230">
<span id="_24.4" style="font-weight; font-family:Times New Roman; font-size:18.0px; color:#000000">
PEMERINTAHAN KABUPATEN KAPUAS</span>
</div>

<div class="separator"></div>
<div class="pos" id="_350:152" style="top:100;left:275">
<span id="_19.0" style="font-weight; font-family:Times New Roman; font-size:18.0px; color:#000000">
KECAMATAN PULAU PETAK</span>
</div>
 
<div class="pos" id="_350:152" style="top:120;left:305">
<span id="_19.0" style="font-weight:bold; font-family:Times New Roman; font-size:18.0px; color:#000000">
DESA HANDIWUNG</span>
</div>


<div class="pos" id="_186:195" style="top:145;left:240">
<span id="_16.3" style=" font-family:Times New Roman; font-size:11px; color:#000000">
JL. Poros Kebupaten Nomor 01 RT. 03 RW. 01 Desa Handiwung</span>
</div>

<div class="pos" id="_186:195" style="top:160;left:205">
<span id="_16.3" style=" font-family:Times New Roman; font-size:11px; color:#000000">
Kecamatan Pulau Petak, Kabupaten Kapuas, Prov. Kalimantan Tengah 73592</span>
</div>
';

echo "
                </div>
                 ";
                echo ' 
                <h5 class="tgh" id="nama">Laporan Data Hasil Algoritma C45<br></h5> 
                            
                           
<br><br>
                            
                    <div class="">
            <div class="">
                <table class="demo-table" width="100%" cellspacing="0" >
                    <thead class="">
                            
                                <tr> 
                                                <th>id_ih</th>
                                                <th>nama_ih</th>
                                                <th>usia_ih</th>
                                                <th>IMT</th> 
                                                <th>ukur_lila (cm)</th>
                                                <th>status</th>  
                                    </tr>                            
</thead>
                    <tbody>
';
// Fungsi untuk melakukan klasifikasi berdasarkan pohon keputusan
function classify($ukuran_lila, $imt, $umur) {
    // Aturan pohon keputusan untuk klasifikasi
    // Misal: Jika ukuran LILA < 23.5, IMT < 18.5, dan umur < 18, maka resiko normal
    if ($ukuran_lila < 23.5 && $imt < 18.5 && $umur < 18) {
        return "Normal";
    } else {
        return "Kurang Energi Kronis (KEK)";
    }
}

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ibuhamil";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel ibuhamil
$sql = "SELECT * FROM ibuhamil";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data dari setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        $nama_ibu = $row["nama_ih"];
        $ukur_lila = $row["ukur_lila"];
        $bb = $row["bb"];
        $tb = $row["tb"];
        $usia_ih = $row["usia_ih"];

        // Hitung IMT
        $imt = $bb / (($tb / 100) ** 2);

        // Lakukan klasifikasi menggunakan pohon keputusan
        $klasifikasi = classify($ukur_lila, $imt, $usia_ih);

        // Tampilkan hasil klasifikasi
        echo "
            <tr> 
                <td>$row[id_ih]</td>
                <td>$row[nama_ih]</td>
                <td>$row[usia_ih]</td>
                <td><b>$imt</b></td>
                <td>$row[ukur_lila]</td>                
                <td><b>$klasifikasi</b></td>
            </tr>";
    }
} else {
    echo "Tidak ada data ibu hamil.";
} 
                            echo '
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>';
     function dateIndonesia($date){
        if($date != '0000-00-00'){
            $date = explode('-', $date);
 
            $data = $date[2] . ' ' . bulan($date[1]) . ' '. $date[0];
        }else{
            $data = 'Format tanggal salah';
        }
 
        return $data;
    }
 
    function bulan($bln) {
        $bulan = $bln;
 
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
        }
        return $bulan;
    }
 
 
    // Menampilkan Format Tanggal Indonesia
    $hari_ini = date('Y-m-d');
    echo ' <br> Tanggal Cetak : '.dateIndonesia($hari_ini); 
echo '
   

';   
?>
<?php 

//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML($html);
$mpdf->Output('ibuhamil' ,'I');

?>