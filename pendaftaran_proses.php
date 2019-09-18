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
    <title>proses pendaftaran</title>
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
                    $no = $_POST['no'];
                    echo "No Pendaftaran : $no<br><br>";
                    $nisn = $_POST['nisn'];
                    echo "NISN : $nisn<br><br>";
                    $nama = $_POST['nama'];
                    echo "Nama : $nama<br><br>";
                    $alamat = $_POST['al'];
                    echo "Alamat : $alamat<br><br>";
                    $tl = $_POST['tl'];
                    echo "Tempat Lahir : $tl<br><br>";
                    $tgl = $_POST['tgl'];
                    echo "Tanggal Lahir : $tgl<br><br>";
                    $jenis = $_POST['jk'];
                    echo "Jenis Kelamin : $jenis<br><br>";
                    $jurusan = $_POST['jurusan'];
                    $agama = $_POST['agama'];
                    echo "Agama : $agama<br>";
                    echo "Jurusan : $jurusan<br><br>";
                    $ayah = $_POST['ayah'];
                    echo "Nama ayah : $ayah<br><br>";
                    $paya = $_POST['paya'];
                    echo "Pekerjaan ayah : $paya<br><br>";
                    $ibu = $_POST['ibu'];
                    echo "Nama ibu : $ibu<br><br>";
                    $pibu = $_POST['pibu'];
                    echo "Pekerjaan ibu : $pibu<br><br>";
                    echo "Ekstrakurikuler: <br><ul>";
                        if(isset($_POST['h1'])){
                            echo "<li> ".$_POST['h1']."<br></li>";
                        }
                        if(isset($_POST['h2'])){
                            echo "<li> ".$_POST['h2']."<br></li>";
                        }
                        if(isset($_POST['h3'])){
                            echo "<li> ".$_POST['h3']."<br></li>";
                        }
                        if(isset($_POST['h4'])){
                            echo "<li> ".$_POST['h4']."<br></li>";
                        }
                        if(isset($_POST['h5'])){
                            echo "<li> ".$_POST['h5']."<br></li>";
                        }
                        if(isset($_POST['h6'])){
                            echo "<li> ".$_POST['h6']."<br></li>";
                        }
                        echo "</ul><br>";
                    $moto = $_POST['moto'];
                    echo "Moto  Hidup Anda : $moto <br><br>";
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