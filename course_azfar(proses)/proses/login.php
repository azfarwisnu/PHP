
<?php 

session_start();

$username = htmlentities  ($_POST['usernamelogin'],ENT_QUOTES);
$password = htmlentities  (md5($_POST['passwordlogin'],ENT_QUOTES));

include "koneksi.php";
$sql = "SELECT * FROM register_user WHERE username = '$username' and password = '$password' ";
$quser = $koneksi->query($sql);
$rowuser = $quser->fetch_assoc();

if (!empty($rowuser)) {
         $_SESSION['username'] = $username;
         header("location:sukses.html");
        
}

else {
    header("location:gagal.html");
}

?>