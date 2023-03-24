<?php
include("config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if (isset($_POST['daftar'])) {
   // ambil data dari formulir
   $nama = htmlspecialchars($_POST['nama']);
   $alamat = htmlspecialchars($_POST['alamat']);
   $jk = htmlspecialchars($_POST['jenis_kelamin']);
   $agama = htmlspecialchars($_POST['agama']);
   $sekolah = htmlspecialchars($_POST['sekolah_asal']);

   // buat query
   $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
   $query = mysqli_query($conn, $sql);

   // apakah simpan query berhasil
   if ($query) {
      // kalau berhasil alihkan ke halaman index.php dengan status sukses
      header('Location: index.php?status=sukses');
   } else {
      // kalau gagal alihkan ke halaman index.php dengan status gagal
      header('Location: index.php?status=gagal');
   }
} else {
   die('akses dilarang!');
}
