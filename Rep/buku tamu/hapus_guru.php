<?php
require 'functions.php';

$id = $_GET["id"];

if(hapusGuru($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data berhasil dihapus');
        window.location = 'guru.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data gagal dihpus');
        window.location = 'guru.php';
    </script>
";
}

?>