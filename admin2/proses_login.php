2QA <?php
include 'config.php';
 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
 
    if ($level == "admin" ) {
        $a = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $b = mysqli_query ($db,$a);
       
        if ($b->num_rows >0) {
            $c = mysqli_fetch_array($b);
            session_start();
            $_SESSION['idadmin'] =$c['idadmin'];
            $_SESSION['username'] =$c['username'];
            $_SESSION['level'] =$level;
           
            // echo $role;
            header("location:index.html");
            die();
        }
        else{
            echo "gagal";
        }
 
    }elseif($level == "kelas" ){
       
        $v = "SELECT * FROM kelas WHERE username='$username' AND password='$password'";
        $d = mysqli_query ($db,$v);
            if ($d->num_rows >0) {
            $c = mysqli_fetch_array($d);
            session_start();
            $_SESSION['username'] =$c['username'];
            $_SESSION['level'] =$level;
            header("location:../siswa/index.php");
            die();
        }
        else{
            echo "gagal";
        }
 
    }elseif($level == "walas" ){
       
        $a = "SELECT * FROM walas WHERE username='$username' AND password='$password'";
        $f = mysqli_query ($db,$a);
            if ($f->num_rows >0) {
            $c = mysqli_fetch_array($f);
            session_start();
            $_SESSION['username'] =$c['username'];
            $_SESSION['level'] =$level;
            echo "<script type='text/javascript'>alert('Anda Berhasil Login !! ');</script>";
            echo "<meta http-equiv='refresh' content='0;../walas/index.php?halaman=alumni_profil'>";
            die();
        }
        else{
            echo "<script type='text/javascript'>alert('Gagal Masuk Silahkan Login Lagi !!');</script>";
            echo "<meta http-equiv='refresh' content='0; index.php'>";
        }
    }
    else {
        echo "Username / Password Salah !";
    }
 
 
}
 
 
 
  ?>