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
    <title>Kwitansi</title>
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
    <div class="col-sm-18">
    <div class="page-header"><h1 align="center">Kwitansi</h1><br></div>
    <form action="kwitansi_proses.php" method="POST">

    <div class="card-deck">
        <div class="row card" style="width: 18rem;">
            <div class="card-body">
            <h1 class="card-title" align="center">Kelas X</h1>
            <p class="card-text">Pada Kelas 10 anda harus membayar uang sebesar Rp.8.500.000</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Masuk</button>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h1 class="card-title" align="center">Kelas XI</h1>
            <p class="card-text">Pada Kelas 11 anda harus membayar uang sebesar Rp.5.500.000</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Masuk</button>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h1 class="card-title" align="center">Kelas XII</h1>
            <p class="card-text">Pada Kelas 12 anda harus membayar uang sebesar Rp.5.000.000</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Masuk</button>
            </div>
        </div>
    </div>

	<div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kelas 10</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td>Rp.8.500.000</td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nami" placeholder="Masukan Nama" required></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="tua" placeholder="Masukan Nama Orang tua" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="al" cols="30" rows="5" placeholder="masukan Alamat Anda" required></textarea> </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jur">
                            <option value="X RPL">X RPL</option>
                            <option value="X TKR">X TKR</option>
                            <option value="X TSM">X TSM</option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Jenis Kelamin</label></td>
                    <td>:</td>
                    <td><input type="radio" name="jen" value="Laki-laki">Laki-laki
                        <input type="radio" name="jen" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Bayar</td>
                    <td>:</td>
                    <td><input type="number" name="bay" placeholder="masukan nominal uang"></td>
                </tr>
                <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td><input type="submit" class="btn btn-primary" name="inp1" value="simpan">
                    <input type="reset" class="btn btn-danger" value="reset"> 
                </td>
            </tr>
            </table>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
            </div>
        </div>
    </div>

    <div id="myModal1" class="modal" tabindex="-1" role="dialog">
        <form action="kwitansi_proses.php" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kelas 11</h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td>Rp.5.500.000</td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nam" placeholder="Masukan Nama" required></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="tuo" placeholder="Masukan Nama Orang tua" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="la" cols="30" rows="5" placeholder="masukan Alamat Anda" required></textarea> </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="rus">
                            <option value="XI RPL">XI RPL</option>
                            <option value="XI TKR">XI TKR</option>
                            <option value="XI TSM">XI TSM</option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Jenis Kelamin</label></td>
                    <td>:</td>
                    <td><input type="radio" name="nis" value="Laki-laki">Laki-laki
                        <input type="radio" name="nis" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Bayar</td>
                    <td>:</td>
                    <td><input type="number" name="yar" placeholder="masukan nominal uang" required></td>
                </tr>
                <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td><input type="submit" class="btn btn-primary" name="inp2" value="simpan">
                    <input type="reset" class="btn btn-danger" value="reset"> 
                </td>
            </tr>
            </table>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
            </div>
        </div>
    </div>

    <div id="myModal2" class="modal" tabindex="-1" role="dialog">
        <form action="kwitansi_proses.php" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kelas 12</h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td>Rp.5.000.000</td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="namo" placeholder="Masukan Nama" required></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="ort" placeholder="Masukan Nama Orang tua" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="mat" cols="30" rows="5" placeholder="masukan Alamat Anda" required></textarea> </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="san">
                            <option value="XII RPL">XII RPL</option>
                            <option value="XII TKR">XII TKR</option>
                            <option value="XII TSM">XII TSM</option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Jenis Kelamin</label></td>
                    <td>:</td>
                    <td><input type="radio" name="kel" value="Laki-laki">Laki-laki
                        <input type="radio" name="kel" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Bayar</td>
                    <td>:</td>
                    <td><input type="number" name="ar" placeholder="masukan nominal uang" required></td>
                </tr>
                <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td><input type="submit" class="btn btn-primary" name="inp3" value="simpan">
                    <input type="reset" class="btn btn-danger" value="reset"> 
                </td>
            </tr>
            </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
            </div>
        </div>
    </div>
    </form>
    </div>
</div>
</body>
</html>
<?php
}else{
    header("Location: login.php");
}
?>