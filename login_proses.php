<?php 

include 'koneksi.php';
$id=$_POST['id'];
$pw=$_POST['pw'];

$query=mysqli_query($koneksi, "select * from user where id='$id' and pass='$pw'")or die(mysqli_error());
$r=mysqli_num_rows($query);

if($r>0){
	header("location:https://localhost/facebook-login/?code=AQDxPUtVgh47BC2Ys2fRGzlcGVUDFHYI_vyS1B1Hd_gVbJoCBD03EuZ0eq5r1IKZgtwsPSh5AKBDc0UckZ7TYTnoLnK0up32O3AB2yxPazbEN7URn_C4burMLWHKc1Zs3wI6kNeibxaX7h3FENA_gtnK33Yu58A6_lc9pynBQdc6-UCXvZw6q16Pg6kPghU-41kEs7HoE6g97WszoPqTdbmTcbUjWrZg4UdGIvnuhvL30fnd9dH4nRJgoCONxOM4s0jZbS6b6JfOFCO_Mms2AO-VupM2Gyk02gjVJu6dzNDzlvMRcb9R7-e-XopPMe0SW9be3jPwMat309WApdYd2ehV&state=0ce52a8f241dc4252d22c9c2fc933f3b#_=_");
}else{
	echo "<script>alert('Id atau Password Salah');window.location='index.php'</script>";
	// header("location:index.php")or die(mysqli_error());
}
 
?>