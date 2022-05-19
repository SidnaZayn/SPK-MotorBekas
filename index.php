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

  <div class="container">

    <div class="jumbotron">
      <div class="row text-center ">
        <h2>Sistem Pendukung Keputusan Kelayakan Motor Bekas</h2>
      </div>
    </div>
    <div class="starter-template">
      <center>
        <button data-toggle="modal" data-target="#modal-hitung" class="btn btn-primary"> Hitung Kelayakan </button>
      </center>
    </div>
  </div><!-- /.container -->

  <div class="row">
    <center>
      <h4>Ada 6 (Enam) Rule yang digunakan</h4>
    </center>
    <hr>
    <div class="col-md-2">
      <div class="alert alert-default">
        <b>Rule 1 (R1)</b>
      </div>
      <div class="alert alert-default">
        <b>Rule 2 (R2)</b>
      </div>
      <div class="alert alert-default">
        <b>Rule 3 (R3)</b>
      </div>
      <div class="alert alert-default">
        <b>Rule 4 (R4)</b>
      </div>
      <div class="alert alert-default">
        <b>Rule 5 (R5)</b>
      </div>
      <div class="alert alert-default">
        <b>Rule 6 (R6)</b>
      </div>
    </div>
    <div class="col-md-3">
      <div class="alert alert-info">
        <center>Jika Kilometer <b>Baik</b></center>
      </div>

      <div class="alert alert-info">
        Jika Kilometer <b>Baik</b>
      </div>

      <div class="alert alert-success">
        Jika Kilometer <b>Cukup</b>
      </div>
      <div class="alert alert-success">
        Jika Kilometer <b>Cukup</b>
      </div>

      <div class="alert alert-warning">
        Jika Kilometer <b>Kurang</b>
      </div>

      <div class="alert alert-warning">
        Jika Kilometer <b>Kurang</b>
      </div>

    </div>
    <div class="col-md-3">
      <div class="alert alert-info">
        Dan Bodi <b>Baik</b>
      </div>

      <div class="alert alert-warning">
        Dan Bodi <b>Kurang</b>
      </div>

      <div class="alert alert-info">
        Dan Bodi <b>Baik</b>
      </div>

      <div class="alert alert-warning">
        Dan Bodi <b>Kurang</b>
      </div>

      <div class="alert alert-info">
        Dan Bodi <b>Baik</b>
      </div>

      <div class="alert alert-warning">
        Dan Bodi <b>Kurang</b>
      </div>

    </div>
    <div class="col-md-3">
      <div class="alert alert-info">
        <center>Maka Kelayakan <b>Layak</b></center>
      </div>
      <div class="alert alert-info">
        Maka Kelayakan <b>Layak</b>
      </div>

      <div class="alert alert-info">
        Maka Kelayakan <b>Layak</b>
      </div>

      <div class="alert alert-warning">
        Maka Kelayakan <b>Tidak Layak</b>
      </div>

      <div class="alert alert-warning">
        Maka Kelayakan <b>Tidak Layak</b>
      </div>

      <div class="alert alert-warning">
        Maka Kelayakan <b>Tidak Layak</b>
      </div>

    </div>
  </div>
  <hr>

  </div><!-- /.container -->


  <!-- Modal -->

  <div class="modal fade" id="modal-hitung" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Demo Logika Fuzzy Kelayakan Motor Bekas</h4>
        </div>
        <div class="modal-body" id="body-detail">
          <form action="tampil.php" method="post">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Merk</label>
                    <select class="form-control" name="merk" id="merk" required>
                      <option value="Yamaha">Yamaha</option>
                      <option value="Honda">Honda</option>
                      <option value="Kawasaki">Kawasaki</option>
                      <option value="KTM">KTM</option>
                      <option value="Suzuki">Suzuki</option>
                      <option value="TVS">TVS</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Jenis</label>
                    <input type="text" class="form-control" name="jenis" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Kilometer (Dalam KM)</label>
                  <input id="masakerja" required type="text" placeholder="Dalam satuan KM" name="kilometer" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label>Kelayakan Body (Dalam Satuan Persen)</label>
                  <input id="gaji" required type="text" name="bodi" value="" placeholder="Dalam satuan Persen" class="form-control">
                </div>
                <center>
                  <button class="btn btn-primary" type="submit" id="hitung">Hitung</button>
                </center>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn  btn-outline btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->

  <!-- Bootstrap core JavaScript
================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>