<?php
 
 $kalor = null;
 $stinggi = null;
 $srendah = null;
 $waktu = null;
  $eff  = null;
  $usaha  = null;
  $daya = null;
  $daya2 = null;

if(isset($_POST['aqat']))
{
  $kalor = $_POST['kalor'];
  $stinggi = $_POST['stinggi'];
  $srendah = $_POST['srendah'];
  $waktu = $_POST['waktu'];

  $eff = (1-($srendah/$stinggi))*100;
  $eff = round($eff,2);
  $usaha = ($eff*$kalor)*100;
  $usaha = round($usaha,2);
  $daya = $usaha/$waktu;
  $daya = round($daya,2);
  $daya2 = $daya /1000;
}

if(isset($_POST['reset']))
{
  if($aw = 0){

  } else {
    $kalor1 = null;
    $kalor2 = null;
    $skondensor = null;
    $eff = null;
    $usaha = null;
    $daya = null;
    $daya2 = null;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css">

    <!-- tittle -->
    <title style="text-align: center">Siklus Carnot</title>
  </head>

  <body>
    <!--==============================================================Top Navbar ============================================================ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PLTU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            <a class="nav-link" href="siklus.html">Siklus</a>
            <a class="nav-link" href="simulasi.php">Simulasi</a>
          </div>
        </div>
      </div>
    </nav>
    <!--========================================================== End Top Navbar Buttom ====================================================== -->

    <!-- ============================================================= Script Simulasi ==================================================================== -->
                      <div class="card-header mt-4">
                        <center><h4 class="mt-1">Simulasi Siklus Carnot PLTU</center><br>
                        <form method="post" >
                            <div class="mb-3">
                                <label class="form-label">Kalor</label>
                                <input type="text" name="kalor" value="<?=$kalor;?>" placeholder="Dalam Satuan Joule" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Suhu Rendah</label>
                                <input type="text" name="srendah" value="<?=$srendah;?>" placeholder="Dalam Satuan Kelvin" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Suhu Tinggi</label>
                                <input type="text" name="stinggi" value="<?=$stinggi;?>" placeholder="Dalam Satuan Kelvin" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu</label>
                                <input type="text" name="waktu" value="<?=$waktu;?>" placeholder="Dalam Satuan Detik" class="form-control">
                            </div>
                            <br>
                            <br>
                            <center><button type="submit"  class="btn btn-primary" name="aqat">Proses Siklus</button></center>
                            <br>
                            <br>
                            <br>
                            <br><a><b>Eff = (1-(Suhu Rendah / Suhu Tinggi)) * 100%</b></a>
                            <br><a><b>Eff = (1 - (<?=$srendah;?> / <?=$stinggi;?>)) * 100%</b></a>
                            <br><a><b>Eff = <?=$eff;?> %</b></a><br>
                            <br><a><b>Usaha = (Eff * Kalor) * 100%</b></a>
                            <br><a><b>Usaha = (<?=$eff;?>*<?=$kalor;?>) * 100%</b></a>
                            <br><a><b>Usaha = <?=$usaha;?> Joule</b></a><br>
                            <br><a><b>Daya = Usaha / Waktu</b></a> 
                            <br><a><b>Daya = <?=$usaha;?> / <?=$waktu;?>
                            <br><a><b>Daya = <?=$daya;?> Watt</b></a>
                            <br>
                            <center><button type="submit"  class="btn btn-danger" name="reset">Reset</button></center>
                          </div>
                        </form>
                      </div>
                     
    <!-- ====================================================End Script Simulasi ===================================================== -->

    <!--============================================================ Navbar Buttom================================================= -->
    <div class="Buttom bg-white">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="index.html">Home</a></li>
        <li class="page-item"><a class="page-link" href="siklus.html">Siklus</a></li>
      </ul>
    </div>
    <!--======================================End Navbar Buttom================================================= -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
 