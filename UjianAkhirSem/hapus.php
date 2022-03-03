<?php 
require 'fungsi.php';
// menangkap data yang tercecer di url (yang ada di bawah biassanya)
$id = $_GET["id"];

if ( hapus($id) > 0 ) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'admin.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
?>