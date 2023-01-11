<?php include('./config/config.php');

if(isset($_POST['panne'])){

    $name=$_POST['name'];
    $client = isset($_POST['client']) ? $_POST['client'] : 0;
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $req="INSERT INTO panne(name,client,phone,email,subject,message) VALUES(:name,:client,:phone,:email,:subject,:message)";

    $requete= $connexion->prepare($req);
    $requete->execute(array(
        ':name'=>$name,
        ':client'=>$client,
        ':phone'=>$phone,
        ':email'=>$email,
        ':subject'=>$subject,
        ':message'=>$message,
    ));
        
    header('location:./index.php?message="sent"');
    

}