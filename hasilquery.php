<html>
<head>
<title>Hasil Kata Kunci</title>
</head>
<body style="background-color:#FC9">
<center>
<h1 style="background-color:#F99">INFORMATION RETRIEVAL 2019
<br> Fildza Salsabela-17.01.55.5004</h1>
<br>
<input type="button" value="Beranda" onClick="window.open('index.php')" button class="btn home"> </button><br><br>
</center>
<table border=3 width=100%>
	<th>Nama</th>
	<th>Token</th>
	<th>Stem</th>

<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$host="localhost";
$user="id7356764_dbstbi";
$pass="dbstbi1234";
$database="id7356764_dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($host, $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
			<tr>
				<td>".$row['nama_file']."</td>
				<td>". $row['token'] . "</td>
				<td>" . $row['tokenstem'] . "</td>
			</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
'</table>'
///
?>
</body>
</html>