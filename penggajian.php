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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Penggajian</title>
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

<div class="container" style="width: 900px;">
    <div class="row"></div>
    <div class="col-sm-18">
        <div class="page-header"><h1 align="center">Penggajian</h1><br></div>
    <form action="penggajian_proses.php" method="POST">
    
        <div class="form-group">
            <label>Tanggal Gajian</label>
            <div class="row col-md-4">
                <input type="date" name="tgl" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label>NIP</label>
            <div class="row col-md-4">
                <input type="number" name="nip" class="form-control" placeholder="Masukan NIP" required>
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group col-md-5">
                <label>Jabatan</label>
                <select class="form-control" name="jbt">
						<option value="Manager">Manager</option>
                        <option value="Asisten Manager">Asisten Manager</option>
						<option value="Karyawan">Karyawan</option>
                        <option value="Office Boy">Office Boy</option>
                        <option value="Security">Security</option>
				</select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Jenis Kelamin</label><br>
                <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
                <input type="radio" name="jk" value="Perempuan">Perempuan<br>
            </div>
        </div>
        
        <div class="form-row">

            <div class="form-group col-md-4">
                <label>Jam Kerja</label>
                <input type="number" name="jamker" placeholder="Masukan Jam Kerja" class="form-control" required>
            </div>
            
        </div>

        <div class="form-group">
            <label>Alamat</label> 
                <div class="row col-sm-8">
                    <textarea name="al" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat Anda" required></textarea>
                </div>
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="reset" class="btn btn-danger"><br>
    </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
}else{
    header("Location: login.php");
}
?>