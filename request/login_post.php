<?php 
require "../param.php"; 
require "connect.php";

$username      = htmlspecialchars(trim(strip_tags($_POST["username"])));
$password      = htmlspecialchars(trim(sha1($_POST["password"])));
  
if(isset($_POST['login']))
{

    if(empty($username) || empty($password)) 
    {
        header("location:../index.php?all fields are required");
    }
    else 
    {
        $req = $db->prepare("
            SELECT * 
            FROM user 
            WHERE username = :username AND password = :password
        ");

        $req->bindValue(':username', $username, PDO::PARAM_STR);
        $req->bindValue(':password', $password, PDO::PARAM_STR);

        $req->execute();

        $result = $req->fetch();
        if($result) 
        {
            $_SESSION["id"] = $result["id"];
            $_SESSION["username"] = $result["username"];
            header("location:../index.php");
        }
        else 
        {
            header("location:../index.php?wrong_data");
        }
    }
}



