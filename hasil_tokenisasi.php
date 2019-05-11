<?php
//membuat koneksi ke database
$host="localhost";
$user="id7356764_dbstbi";
$pass="dbstbi1234";
$database="id7356764_dbstbi";
	
	$konek_db=mysqli_connect($host,$user,$pass,$database);
?>
<html>
<title>Tokenisasi</title>
<body style="background-color:#FC9">
<center>
<h1 style="background-color:#F99">INFORMATION RETRIEVAL 2019
<br> Fildza Salsabela-17.01.55.5004</h1>
<br>
<input type="button" value="Upload Undang-Undang" onClick="window.open('upload.php')" button class="btn upload"> </button>
<input type="button" value="Beranda" onClick="window.open('index.php')" button class="btn home"> </button><br><br>

<h3>HASIL TOKENISASI DAN STEMMING</h3><br>

<!-- //////////Script untuk membuat tabel////////// -->
<table border='1' width='800'>
<tr>
	<th>Nama File</th>
	<th>Tokenisasi</th>
	<th>Token Stem</th>
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="select * from dokumen";  //menampikan SEMUA

$hasil=mysqli_query($konek_db,$queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data=mysqli_fetch_array($hasil)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        
        </tr> 
        ";
        
}

?>
</table>
</center>
</body>
</html>
	