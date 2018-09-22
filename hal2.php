<?php 
session_start();
 if ($_SESSION['akses'] == "admin") {
    ?>
    <script type="text/javascript">
        alert("Anda Bukan Admin");
        location = "hal3.php";
    </script>
    <?php
 }
echo "Selamat datang di halaman2";
?>
 <a href="hal1.php">HOME</a>
