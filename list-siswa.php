<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pendaftaran Siswa Baru | SMK Koding</title>
</head>

<body>
   <header>
      <h3>Siswa yang sudah mendaftar</h3>
   </header>

   <nav>
      <a href="form-daftar.php">[+] Tambah Baru</a>
   </nav>

   <br>

   <table border="1">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i = 1;
         $sql = "SELECT * FROM calon_siswa";
         $query = mysqli_query($conn, $sql);
         ?>

         <?php while ($siswa = mysqli_fetch_array($query)) : ?>
            <tr>
               <td><?= $i; ?></td>
               <td><?= $siswa["nama"]; ?></td>
               <td><?= $siswa["alamat"]; ?></td>
               <td><?= $siswa["jenis_kelamin"]; ?></td>
               <td><?= $siswa["agama"]; ?></td>
               <td><?= $siswa["sekolah_asal"]; ?></td>
               <td>
                  <a href="form-edit.php?id=<?= $siswa['id'] ?>">Edit</a> |
                  <a href="hapus.php?id=<?= $siswa['id'] ?>" onclick="return confirm('Yakin menghapus?')">Hapus</a>
               </td>
            </tr>
            <?php $i++; ?>
         <?php endwhile ?>
      </tbody>
   </table>
   <p>Total : <?= mysqli_num_rows($query) ?> </p>
</body>

</html>