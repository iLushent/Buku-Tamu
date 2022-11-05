<?php
session_start();
require './functions.php';
$resepsionis = query("SELECT * FROM resepsionis")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resepsionis</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="resepsionis.php" class="logo d-flex align-items-center  me-auto me-lg-0">
                <h2>SMK JP1</h2>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="resepsionis.php" class="active">Resepsionis</a></li>
                    <li><a href="home.php" class="">Home</a></li>
                    <li><a href="guru.php" class="">Guru</a></li>
                </ul>
            </nav>

            <div class="header-social-links">
                <a href="https://github.com/iLushent" class="twitter"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/Rafi.RMEF" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/rapiiyapss/?hl=id" class="instagram"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="https://www.youtube.com/channel/UCOPe8jqAyJkPcrahJ_UOpyQ" class="linkedin"><i class="fa-brands fa-youtube"></i></i></i></a>
            </div>
        </div>
    </header>

   <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                <h2>Resepsionis</h2>
                <a href="tambah_user.php" class="btn btn-outline-light">Tambah User</a>
                </div>
            </div>
        </div>
    </section>
        

        <table  border="1" class="d-flex flex-column justify-content-center align-items-center">
            <tr>
                <th><i class="fa-solid fa-list-ol"> NO</i></th>
                <th><i class="fa-solid fa-person"> User name</i></th>
                <th><i class="fa-solid fa-users"> Nama Lengkap</i></th>
                <th><i class="fa-solid fa-school"> Kelas</i></th>
                <th><i class="fa-solid fa-circle-info"> Roles</i></th>
                <th><i class="fa-solid fa-gear"> Aksi</i></th>
            </tr>

                <?php $i = 1; ?>
                <?php foreach($resepsionis as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_user.php?id=<?= $data["id_resepsionis"]; ?>" class="edit"><i class="fa-solid fa-user-pen"></i></a>
                    <a href="hapus_user.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>

