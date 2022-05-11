<?php
header("Location: primul.html");
session_start(); 

$nume = $_SESSION['nume'];
$prenume = $_SESSION['prenume'];
$telefon = $_SESSION['telefon'];
$email = $_SESSION['email'];
$adresa = $_SESSION['adresa'];
$combinatione =  $_POST['combinatione'];
$GDPR =  $_SESSION['GDPR'];
$termeni = $_SESSION['termeni'];
    
$conn = new mysqli('localhost', 'root', '', 'test');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into informatii(nume, prenume, telefon, email, adresa, combinatione, GDPR, termeni)
          values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$nume, $prenume, $telefon, $email, $adresa, $combinatione, $GDPR, $termeni);
    $stmt->execute();
        
    
  }
  echo "asdasdasd";
?>


