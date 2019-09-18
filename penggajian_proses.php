<?php
session_start();
if (isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>proses penggajian</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Tugas</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="penggajian.php">Penggajian</a>
            <a class="dropdown-item" href="kwitansi.php">Kwitansi</a>
            <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>
            <a class="dropdown-item" href="logout.php" onclick="myFunction()">Log Out</a>
            </div>
        </li>
        </ul>
    </div>
</nav>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main section">
            <div class="modal-content">

            <form class="col-12">
                <div class="form-group">
                <?php
                if(isset($_POST['simpan'])){
                    $nama = $_POST['nama'];
                    $tgl = $_POST['tgl'];
                    $jk = $_POST['jk'];
                    $nip = $_POST['nip'];
                    $al = $_POST['al'];
                    $jbt = $_POST['jbt'];
                    if ($jbt=="Manager") {
                        $o = 50000;
                        $gapo = 8000000;
                    }
                    elseif ($jbt=="Asisten Manager") {
                        $gapo = 6000000;
                        $o = 35000;
                    }
                    elseif ($jbt=="Karyawan") {
                        $gapo = 5000000;
                        $o= 25000;
                    }
                    elseif ($jbt=="Office Boy") {
                        $gapo = 2500000;
                        $o = 20000;
                    }
                    elseif ($jbt=="Security") {
                        $gapo = 2000000;
                        $o = 20000;
                    }
                    
                    $jamker = $_POST['jamker'];
                    if ($jamker==0) {
                        $j = 0*$o;
                    }
                    elseif ($jamker==1) {
                        $j = 1*$o;
                    }
                    elseif ($jamker==2) {
                        $j = 2*$o;
                    }
                    elseif ($jamker==3) {
                        $j = 3*$o;
                    }
                    elseif ($jamker==4) {
                        $j = 4*$o;
                    }
                    elseif ($jamker==5) {
                        $j = 5*$o;
                    }
                    elseif ($jamker==6) {
                        $j = 6*$o;
                    }
                    elseif ($jamker==7) {
                        $j = 7*$o;
                    }
                    elseif ($jamker==8) {
                        $j = 8*$o;
                    }else{
                        $j = "jam kerja yang anda masukan melebihi jam kerja";
                        $jamker = $j;
                    }
                    
                    $total = $gapo+$j;


                    echo "Tanggal : $tgl<br>";
                    echo "Nama : $nama<br>";
                    echo "NIP : $nip<br>";
                    echo "Jabatan : $jbt<br>";
                    echo "Gaji Pokok : Rp.$gapo<br>";
                    echo "Jam Kerja : $jamker x $o<br>";
                    printf("Total Gaji adalah Rp %.0f", $total);
                }
                ?>
                </div>
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php
}else{
    header("Location: login.php");
}
?>