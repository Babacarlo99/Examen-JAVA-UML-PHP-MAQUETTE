<?php

if(isset($_POST['Connexion']))
{
    $Email = $_POST['email'];
    $pass = $_POST['post'];

    $db = new PDO('mysql:host=loclahost;dname=loginsysteme', 'root' , '');
    $result = $db->prepare($sql);
    $result->execut();
    
    if($result->rowCount);
    {

    }
    {
        else
    }
    {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT-INTO user (email,password) VALUES ('$email','$pass')";
        $req = $db->prepare($sql);
        $req->execute();
        echo "header('location:index.php')"
    }
}

?>