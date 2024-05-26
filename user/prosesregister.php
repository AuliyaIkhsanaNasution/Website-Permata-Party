<?php

require 'function.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
            alert ('Akun Baru Berhasil Dibuat');
            document.location.href = 'login.php?user=true';
        </script>";
    } else {
        echo "<script>
            alert ('Akun Baru Gagal Dibuat');
            document.location.href = 'register.php';
        </script>";
    }
}
