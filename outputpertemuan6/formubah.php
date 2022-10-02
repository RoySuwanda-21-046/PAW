<?php
$conn = mysqli_connect("localhost","root","","suwanda");
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM tbl_mhs WHERE id_mhs=$id");
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Ubah Biodata Mahasiswa</h2>
  <p>Silahkan ubah biodata mahasiswa.</p>
  	
  <form action="actionubah.php" method="POST">
      <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']?>">
    <div class="mb-3 mt-3"> 
            <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" value="<?php echo $data['nama_mhs']?>" name="nama_mhs">
    <br>
      <label for="alamat_mhs">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="alamat_mhs" value="<?php echo $data['alamat_mhs']?>" name="alamat_mhs">
    <br>
      <label for="sel1" class="form-label">Pilih Program Studi (select one):</label>
    <select class="form-select" id="sel1" name="nama_prodi">
      <option>Program Studi...</option>
      <option value="1">1. Teknik Informatika</option>
      <option value="2">2. Sistem Informasi</option>
      <option value="3">3. Teknik Mesin</option>
      <option value="4">4. Teknik Elektro</option>
      <option value="5">5. Teknik Mekatronika</option>
      <option value="6">6. Teknik Industri</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>


     


