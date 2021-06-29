<?php
$con=mysqli_connect('localhost','root');
	if($con){
		echo "connection successful";
		
}
mysqli_select_db($con,'etech221');
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobil= $_POST['mobil'];
    $commentaires=$_POST['commentaires'];
    $squery="insert into userinfo userinfo(user,email,mobil,commentaire)
    values('$user','$email','$mobil','$commentaire')";
    echo"$squery";
    mysqli_query($con,$query);
    header('location:index.php')

?> 