<?php

header("Location: primul.html");
session_start();

$_SESSION['nume'] = $_POST['nume']; 
$_SESSION['prenume']= $_POST['prenume']; 
$_SESSION['telefon']= $_POST['telefon'];
$_SESSION['email']= $_POST['email'];
$_SESSION['adresa']= $_POST['adresa'];
$_SESSION['GDPR']= $_POST['GDPR'];
$_SESSION['termeni']= $_POST['termeni'];    
      
?>









  