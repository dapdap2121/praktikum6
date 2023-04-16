<?php
if(!empty($_POST['nama']) && !empty($_POST['email'])) {
echo "<center><h3>Welcome!</h3></center>";
echo "<center>Nama : ".$_POST['nama']."</center><br>";
echo "<center>Email :".$_POST['email']."</center><br>";
echo "<center>Waktu login: " . date("D, Y-m-d h:i:s") . "</center><br>";
} else{
    header('Location: error.php');
}
?>
