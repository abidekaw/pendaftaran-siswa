<?php
include('config.php');

// kalau tidak ada di query string
if (!isset($_GET['id'])) {
   header('Location : list-siswa.php');
}

// ambil data dari query string
$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
   die("Data tidak ditemukan!");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulir Edit Siswa | SMK Koding</title>
</head>

<body>
   <header>
      <h3>Formulir Edit Siswa</h3>
   </header>

   <form action="proses-edit.php" method="POST">
      <fieldset>
         <input type="hidden" name="id" value="<?= $siswa["id"] ?>">

         <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" value="<?= $siswa['nama'] ?>" id="nama">
         </p>

         <p>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?= $siswa['alamat'] ?></textarea>
         </p>

         <p>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <?php $jk = $siswa['jenis_kelamin'] ?>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" <?= $jk === 'Laki-Laki' ? 'checked' : '' ?>>Laki-Laki
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?= $jk === 'Perempuan' ? 'checked' : '' ?>>Perempuan
         </p>

         <p>
            <label for="agama">Agama :</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama" id="agama">
               <option value="Islam" <?= $agama === 'Islam' ? 'selected' : '' ?>>Islam</option>
               <option value="Nasrani" <?= $agama === 'Nasrani' ? 'selected' : '' ?>>Nasrani</option>
               <option value="Yahudi" <?= $agama === 'Yahudi' ? 'selected' : '' ?>>Yahudi</option>
            </select>
         </p>

         <p>
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" id="sekolah_asal" value="<?= $siswa['sekolah_asal'] ?>" placeholder="Nama Sekolah">
         </p>

         <p>
            <button type="submit" name="simpan">Simpan</button>
         </p>
      </fieldset>
   </form>
</body>

</html>