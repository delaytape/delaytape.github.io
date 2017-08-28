<?php 
$first_name=$_POST["first_name"];
$telephone=$_POST["telephone"];
$Email=$_POST["E-mail"];
$tekst=$_POST["tekst"];
mail("nikita.oleshov@gmail.com", "Клиент с сайта", "$first_name, $telephone, $Email, $tekst");
header("Location: contact.php");
?>