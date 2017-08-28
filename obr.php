<?php 
$first_name=$_POST["first_name"];
$telephone=$_POST["telephone"];
$Email=$_POST["E-mail"];
$date=$_POST["date"];
$vremya=$_POST["vremya"];
mail("nikita.oleshov@gmail.com", "Клиент с сайта", "$first_name, $telephone, $Email, $date, $vremya");
header("Location: index.php")
?>