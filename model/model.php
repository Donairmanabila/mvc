<?php
	class model {
		//Donah.com
		//Membuat koneksi ke database
		function __construct() {
			$this->connect = mysqli_connect ("localhost","root", "", "mvc");
		}
		
		//Membuat eksekusi perintah query
		function execute($query) {
			return mysqli_query($this->connect,$query);
		}
		
		//Menampilkan semua data di dalam tabel
		function SelectAll() {
			$query = "select * from mahasiswa";
			return $this->execute($query);
		}
		
		function selectMhs($nim) {
			$query = "select * from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}
		
		//Membuat fungsi function Delete
		function deleteMhs($nim) {
			$query = "delete from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}
		
		//Membuat fungsi function Input
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi) {
			$query = "insert into mahasiswa values ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi')";
			return $this->execute($query);
		}
		
		//Membuat fungsi function Update
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi) {
			$query = "update mahasiswa set nim='$nim', nama='$nama',
			angkatan='$angkatan', fakultas='$fakultas', program='$prodi' where nim='$nim'";
			return $this->execute($query);
		}
		
		//Membuat fungsi function secara berulang/array
		function fetch($var) {
			return mysqli_fetch_array($var);
		}
		
		//Fungsi construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct() {
		}
	}
?>