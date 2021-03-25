
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 

include "koneksi.php";

$username = $_POST['username']; 
$password = md5($_POST['password']);
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO register_user (username,password,email,alamat) VALUES ('$username','$password','$email','$alamat')";
$qmember = $koneksi->query($sql);
?>

<script>
    window.location="../index.php";
    alert('Pendaftaran Berhasil Silahkan login !!');
</script>

    
</body>
</html>


