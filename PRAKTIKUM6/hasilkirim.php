<?php
if (empty ($_POST['nama'])) {
    header ("Location:dataKosong.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>