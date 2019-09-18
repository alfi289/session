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
    <title>Pendaftaran  </title>
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

<div class="container">

    <div class="row"></div>
    <div class="col-sm-12">
        <div class="page-header"><h1 align="center">Pendaftaran Siswa</h1><br></div>
        <form class="form-horizontal" action="pendaftaran_proses.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>No Pendaftaran</label>
                <input type="number" name="no" class="form-control" placeholder="No">
            </div>
            <div class="form-group col-md-6">
            <label>NISN</label>
            <input type="number" name="nisn" class="form-control" placeholder="NISN">
            </div>
        </div>
            <div class="form-group">
            <label>Nama</label> 
                <div class="col-sm-7">
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda" required>
                </div>
            </div>
            <div class="form-group">
            <label>Alamat</label> 
                <div class="col-sm-7">
                    <textarea name="al" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat Anda" required></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tl" class="form-control" placeholder="Tempat Lahir Anda" required>
                </div>
                <div class="form-group col-md-6">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl" class="form-control">
                </div>
            </div>

            <label>Agama</label>
				<div class="col-sm-2">
					<select class="form-control" name="agama">
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
					</select>
				</div>

            <div class="form-group">
            <label>Asal Sekolah</label> 
                <div class="col-sm-7">
                    <input type="text" name="as" class="form-control" placeholder="Masukan Asal Sekolah Anda" required>
                </div>
            </div>
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
            <input type="radio" name="jk" value="Perempuan">Perempuan<br>
            <div class="form-group">
				<label>Jurusan</label>
				<div class="col-sm-2">
					<select class="form-control" name="jurusan">
						<option value="RPL">RPL</option>
						<option value="TKR">TKR</option>
						<option value="TSM">TSM</option>
					
					</select>
				</div>
			</div>
            <div class="form-group">
            <label>Nama Ayah</label> 
                <div class="col-sm-7">
                    <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah Anda" required>
                </div>
            </div>
            <div class="form-group">
            <label>Pekerjaan Ayah</label> 
                <div class="col-sm-7">
                    <input type="text" name="paya" class="form-control" placeholder="Pekerjaan Ayah Anda" required>
                </div>
            </div>
            <div class="form-group">
            <label>Nama Ibu</label> 
                <div class="col-sm-7">
                    <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu Anda" required>
                </div>
            </div>
            <div class="form-group">
            <label>Pekerjaan Ibu</label> 
                <div class="col-sm-7">
                    <input type="text" name="pibu" class="form-control" placeholder="Pekerjaan Ibu Anda" required>
                </div>
            </div>
            <tr>
                    <td>Ekstrakurikuler</td>
                    <td>:</td><br>
           <td> <input type="checkbox" name="h1" value="Tari" checked>Tari<br>
            <input type="checkbox" name="h2" value="Taekwondo">Taekwondo<br>
            <input type="checkbox" name="h3" value="Pmr">Pmr<br>
            <input type="checkbox" name="h4" value="Green School">Green School<br>
            <input type="checkbox" name="h5" value="Rohis">Rohis<br>
            <input type="checkbox" name="h6" value="Karawitan">Karawitan<br></td>
            </tr>
             <div class="form-group">
            <label>Moto Hidup</label> 
                <div class="col-sm-7">
                    <input type="text" name="moto" class="form-control" placeholder="Moto Hidup Anda" required>
                </div>
            </div>
           
            <input type="submit" name="simpan" value="Simpan">
            <input type="reset" name="reset" value="reset"><br>
        </form>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<script src="js/bootstrap.js"></script>
</html>
<?php
}else{
    header("Location: login.php");
}
?>