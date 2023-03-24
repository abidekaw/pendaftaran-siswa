<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulir Pendaftaran Siswa Baru | SMK Koiding</title>
</head>

<body>
   <header>
      <h3>Formulir pendafraran siswa baru </h3>
   </header>

   <form action="proses-pendaftaran.php" method="POST">
      <fieldset>
         <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
         </p>
         <p>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" required></textarea>
         </p>
         <p>
            <label>Jenis Kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan</label>
         </p>
         <p>
            <label>Agama :</label>
            <select name="agama">
               <option>Islam</option>
               <option>Nasrani</option>
               <option>Yahudi</option>
            </select>
         </p>
         <p>
            <label for="sekolah_asal">Sekolah Asal :</label>
            <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Asal" required>
         </p>
         <p>
            <button type="submit" name="daftar">Daftar</button>
         </p>
      </fieldset>
   </form>
</body>

</html>