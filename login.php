<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "ayr" && $pass == "123") {
    $_SESSION['login'] = $user;
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='kwitansi.php'>di sini</a>
    untuk menuju ke halaman selanjutnya</h2>";
    }
    else{
        echo "<h1>Username / Password Salah!<br>
        Klik <a href='login.php'>di sini</a> untuk Login</h1>";
    }
} else {
?>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Login here...</title>
    </head>
    <body>
        <form action="" method="post" class="col-sm-12">
        
        <center>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2>Login Here...</h2>
                    Username : <input type="text" name="user"><br>
                    Password : <input type="password" name="pass"><br>
                    <input type="submit" name="Login" value="Log In">
                </div>
            </div>
        </center>
        </form>
    </body>
</html>
<?php } ?>