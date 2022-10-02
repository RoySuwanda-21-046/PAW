<?php 

	$conn = mysqli_connect("localhost","root","","suwanda");
	$nama = $_POST['nama_mhs'];
	$alamat =$_POST['alamat_mhs'];
	$prodi = $_POST['nama_prodi'];

	$sql = "INSERT INTO tbl_mhs(id_prodi,nama_mhs,alamat_mhs) VALUES ('$prodi','$nama','$alamat')";
	$hasil = mysqli_query($conn,$sql);

	if (!$hasil) {
		echo "
			<script>
				alert('Data Gagal Ditambahkan');
				document.location.href = 'datamhs.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data $nama telah Berhasil Ditambahkan');
				document.location.href = 'datamhs.php';
			</script>
		";
	}		
 ?>
