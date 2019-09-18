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
    <title>proses kwitansi</title>
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
                    if(isset($_POST['inp1'])){
                        $nama = $_POST['nami'];
                        $ortu = $_POST['tua'];
                        $jurusan = $_POST['jur'];
                        $jk = $_POST['jen'];
                        $alamat = $_POST['al'];
                        $bayar = $_POST['bay'];
                        if ($bayar<0) {
                            $bayar = 'Masukan nilai dengan benar!';
                            $a = $bayar;
                        }
                        elseif($bayar<=8500000) {
                            $b = 8500000-$bayar;   
                        }
                        else{
                            $a = $bayar-8500000;
                        }

                        echo "Nama = $nama<br>";
                        echo "Nama Orang Tua = $ortu<br>";
                        echo "Jurusan = $jurusan<br>";
                        echo "Jenis Kelamin = $jk<br>";
                        echo "Alamat = $alamat<br>";
                        echo "Bayar = $bayar<br>";
                        if (isset($a)) {
                            echo "Kembalian = $a<br>";
                        }
                        else{
                        echo "Sisa = $b";
                        }
                    }
                    elseif(isset($_POST['inp2'])){
                        $nama = $_POST['nam'];
                        $ortu = $_POST['tuo'];
                        $jurusan = $_POST['rus'];
                        $jk = $_POST['nis'];
                        $alamat = $_POST['la'];
                        $bayar = $_POST['yar'];
                        if ($bayar<0) {
                            $bayar = 'Masukan nilai dengan benar!';
                            $a = $bayar;
                        }
                        elseif($bayar<=5500000) {
                            $b = 5500000-$bayar;   
                        }
                        else{
                            $a = $bayar-5500000;
                        }

                        echo "Nama = $nama<br>";
                        echo "Nama Orang Tua = $ortu<br>";
                        echo "Jurusan = $jurusan<br>";
                        echo "Jenis Kelamin = $jk<br>";
                        echo "Alamat = $alamat<br>";
                        echo "Bayar = $bayar<br>";
                        if (isset($a)) {
                            echo "Kembalian = $a<br>";
                        }
                        else{
                        echo "Sisa = $b";
                        }
                    }
                    elseif(isset($_POST['inp3'])){
                        $nama = $_POST['namo'];
                        $ortu = $_POST['ort'];
                        $jurusan = $_POST['san'];
                        $jk = $_POST['kel'];
                        $alamat = $_POST['mat'];
                        $bayar = $_POST['ar'];
                        if ($bayar<0) {
                            $bayar = 'Masukan nilai dengan benar!';
                            $a = $bayar;
                        }
                        elseif($bayar<=5000000) {
                            $b = 5000000-$bayar;   
                        }
                        else{
                            $a = $bayar-5000000;
                        }

                        echo "Nama = $nama<br>";
                        echo "Nama Orang Tua = $ortu<br>";
                        echo "Jurusan = $jurusan<br>";
                        echo "Jenis Kelamin = $jk<br>";
                        echo "Alamat = $alamat<br>";
                        echo "Bayar = $bayar<br>";
                        if (isset($a)) {
                            echo "Kembalian = $a<br>";
                        }
                        else{
                            echo "Sisa = $b";
                        }
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