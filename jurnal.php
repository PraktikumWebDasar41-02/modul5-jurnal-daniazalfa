<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" >
            <table>
                <tr><td>NIM</td><td><input type="text" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                    </td></tr>
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td colspan="2"><button type="submit" name="submit">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
<?php
$conn = mysqli_connect('localhost','root','','d_modul5');
if (isset($_POST['submit'])) {
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];

	$sql = mysqli_query($conn, "INSERT INTO t_jurnal1('NIM','nama','email','komentar') VALUES ($nim,$nama,$email)");
	if ($sql){
		echo "berhasil";
	}
	
	else{
		echo"gagal";
	}
	
	if (strlen($nim)<10) {
		echo "berhasil<br>";
	}else{
		echo "nim harus 10<br>";
	}

	if (strlen($nama)<20) {
		echo "berhasil<br>";
	}else{
		echo "nama tidak boleh lebih dari 20";
	}
//header("location: hal2.php");
}

?>