<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>SPK Kelayakan Motor Bekas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 20px 15px;
            text-align: center;
        }

        .alert {
            text-align: center !important;
        }

        .pt10 {
            padding-top: 10px !important;
        }

        .navbar-inverse {
            background-color: #950927;
            border-color: #6d0f23;
            color: #fff !important;
        }

        .navbar-inverse .navbar-brand {
            color: #fff;
        }

        .nol {
            background-color: #eee;
            color: #999;
            padding: 3px;
            text-align: center !important;
        }

        .rendah {
            background-color: #f5eb25;
            color: #000;
            padding: 3px;
            text-align: center !important;
        }

        .sedang {
            background-color: #1ea318;
            color: #000;
            padding: 3px;
            text-align: center !important;
        }

        .alert {
            color: #000 !important;
        }

        .tinggi {
            background-color: #62a0f3;
            color: #000;
            padding: 3px;
            text-align: center !important;
        }

        .alert-warning {
            background-color: #f5eb25 !important;
        }

        .alert-success {
            background-color: #1ea318 !important;
        }

        .alert-info {
            background-color: #62a0f3 !important;
        }
    </style>
</head>

<body>
    <?php include 'perhitungan.php';
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    ?>
    <div class="container">
        <?php
        if ($l != "") {
        ?>
            <div class="jumbotron">
                <div class="row text-center ">
                    <h2>Hasil Perhitungan Sistem Pendukung Keputusan Kelayakan Motor Bekas</h2>
                    <p>Motor <?php echo $merk .' '. $jenis?></p>
                </div>
            </div>
            <center>
                <h3>kilometer</h3>
                <p><?php echo $kilometer; ?> KM</p>
                <div class="row">
                    <?php displaykilometer($kilometerBaik, $kilometerCukup, $kilometerKurang); ?>
                </div>
                <br>
            </center>
            <center>
                <h3>bodi</h3>
                <p> <?php echo $bodi; ?>%</p>
                <div class="row">
                    <?php displayBodi($bodiKurang, $bodiBaik); ?>
                </div>
                <br>
            </center>
            <center>
                <h3>Kelayakan</h3>
                <p><?php echo number_format($kelayakan, 2, ",", "."); ?> %</p>
                <div class="row">
                    <?php displayKelayakan($tidak, $Layak); ?>
                </div>
                <br>
            </center>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <table class="table table-condensed table-bordered table-striped">
                        <tr>
                            <td align="center">Rule</td>
                            <td align="center">kilometer</td>
                            <td align="center">Derajat <br> kilometer</td>
                            <td align="center">Derajat <br>  bodi</td>
                            <td align="center">Derajat <br> Kelayakan (x)</td>
                            <td align="center">Nilai Kelayakan</td>
                            <td align="center">Nilai<br>Kelayakan * Derajat<br>Kelayakan (y)</td>
                        </tr>
                        <tr>
                            <td>Rule 1</td>
                            <td>Jika kilometer <b>baik</b> dan  bodi <b>Kurang</b> Maka Kelayakan <b>Tidak Layak</b></td>
                            <td>
                                <center><?php echo round($kilometerBaik, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($bodiKurang, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($R1, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($l1, 2); ?>%<center>
                            </td>
                            <td>
                                <center><?php echo round($R1 * $l1, 2); ?><center>
                            </td>
                        </tr>

                        <tr>
                            <td>Rule 2</td>
                            <td>Jika kilometer <b>baik</b> dan  bodi <b>baik</b> Maka Kelayakan <b>Tidak Layak</b></td>
                            <td>
                                <center><?php echo round($kilometerBaik, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($bodiBaik, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($R2, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($l2, 2); ?>%<center>
                            </td>
                            <td>
                                <center><?php echo round($R2 * $l2, 2); ?><center>
                            </td>
                        </tr>

                        <tr>
                            <td>Rule 3</td>
                            <td>Jika kilometer <b>cukup</b> dan  bodi <b>Kurang</b> Maka Kelayakan <b>Tidak Layak</b></td>
                            <td>
                                <center><?php echo round($kilometerCukup, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($bodiKurang, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($R3, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($l3, 2); ?>%<center>
                            </td>
                            <td>
                                <center><?php echo round($R3 * $l3, 2); ?><center>
                            </td>
                        </tr>

                        <tr>
                            <td>Rule 4</td>
                            <td>Jika kilometer <b>cukup</b> dan  bodi <b>baik</b> Maka Kelayakan <b>Layak Beli</b></td>
                            <td>
                                <center><?php echo round($kilometerCukup, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($bodiBaik, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($R4, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($l4, 2); ?>%<center>
                            </td>
                            <td>
                                <center><?php echo round($R4 * $l4, 2); ?><center>
                            </td>
                        </tr>

                        <tr>
                            <td>Rule 5</td>
                            <td>Jika kilometer <b>kurang</b> dan  bodi <b>Kurang</b> Maka Kelayakan <b>Layak Beli</b></td>
                            <td>
                                <center><?php echo round($kilometerKurang, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($bodiKurang, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($R5, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($l5, 2); ?>%<center>
                            </td>
                            <td>
                                <center><?php echo round($R5 * $l5, 2); ?><center>
                            </td>
                        </tr>


                        <tr>
                            <td>Rule 6</td>
                            <td>Jika kilometer <b>kurang</b> dan  bodi <b>baik</b> Maka Kelayakan <b>Layak Beli</b></td>
                            <td>
                                <center><?php echo round($kilometkilerKurang, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($bodiBaik, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($R6, 2); ?><center>
                            </td>
                            <td>
                                <center><?php echo round($l6, 2); ?>%<center>
                            </td>
                            <td>
                                <center><?php echo round($R6 * $l6, 2); ?><center>
                            </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td>Presentase</td>
                            <td>
                                <center>
                                    <center>
                            </td>
                            <td>
                                <center>
                                    <center>
                            </td>
                            <td>
                                <center><?php echo round($total_R, 3); ?><center>
                            </td>
                            <td>
                                <center>
                                    <center>
                            </td>
                            <td>
                                <center><?php echo round($total_RiZi, 2); ?><center>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="6">Nilai Kelayakan = y / x = <?php echo round($total_RiZi, 2) . " / " . round($total_R, 3); ?> = <?php echo number_format($kelayakan, 2, ",", "."); ?> %</td>
                        </tr>
                    </table>
                    <div style="margin-bottom: 20px !important;">
                    <a href="index.php"><button class="btn btn-primary">Kembali</button></a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        function displaykilometer($kilometerBaik, $kilometerCukup, $kilometerKurang)
        {

            $kilometerBaik = round($kilometerBaik, 2);
            $kilometerCukup = round($kilometerCukup, 2);
            $kilometerKurang = round($kilometerKurang, 2);

            if ($kilometerBaik == 0) {
                echo "<span class='col-md-4 nol'><small>Cukup</small> (0)</span>";
            } else {
                echo "<span class='col-md-4 rendah'><small>Cukup</small> (" . $kilometerBaik . ")</span>";
            }
            echo " ";
            if ($kilometerCukup != 0) {
                echo "<span class=' col-md-4 sedang'><small>Baik</small> (" . $kilometerCukup . ")</span>";
            } else {
                echo "<span class='col-md-4  nol'><small>Baik</small> (0)</span>";
            }
            echo " ";
            if ($kilometerKurang != 0) {
                echo "<span class='col-md-4  tinggi'><small>Sempurna</small> (" . $kilometerKurang . ")</span>";
            } else {
                echo "<span class='col-md-4  nol'><small>Sempurna</small> (0)</span>";
            }
        }
        ?>

        <?php
        function displayBodi($bodiKurang, $bodiBaik)
        {

            $bodiKurang = round($bodiKurang, 2);
            $bodiBaik = round($bodiBaik, 2);

            if ($bodiKurang == 0) {
                echo "<span class='col-md-4 col-md-offset-2 nol'><small>Kurang</small> (0)</span>";
            } else {
                echo "<span class='col-md-4 col-md-offset-2 rendah'><small>Kurang</small> (" . $bodiKurang . ")</span>";
            }
            echo " ";
            if ($bodiBaik != 0) {
                echo "<span class='col-md-4  tinggi'><small>baik</small> (" . $bodiBaik . ")</span>";
            } else {
                echo "<span class='col-md-4  nol'><small>baik</small> (0)</span>";
            }
        }
        ?>

        <?php
        function displayKelayakan($tidak, $Layak)
        {

            $tidak = round($tidak, 2);
            $Layak = round($Layak, 2);

            if ($tidak == 0) {
                echo "<span class='col-md-4 col-md-offset-2 nol'><small>Tidak Layak</small> (0)</span>";
            } else {
                echo "<span class='col-md-4 col-md-offset-2 rendah'><small>Tidak Layak</small> (" . $tidak . ")</span>";
            }
            echo " ";
            if ($Layak != 0) {
                echo "<span class='col-md-4  tinggi'><small>Layak</small> (" . $Layak . ")</span>";
            } else {
                echo "<span class='col-md-4  nol'><small>Layak</small> (0)</span>";
            }
        }
        ?>
    </div>


    <!-- Modal -->

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>