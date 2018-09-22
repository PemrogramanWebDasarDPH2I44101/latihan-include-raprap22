<?php 
session_start();
if ($_SESSION['akses'] == "user") {
    ?>
    <script type="text/javascript">
        alert("Maaf hak akses hanya untuk admin..");
        location = "hal2.php";
    </script>
    <?php
}
echo "Selamat datang di halaman3";
 ?>
  <a href="hal1.php">HOME</a>