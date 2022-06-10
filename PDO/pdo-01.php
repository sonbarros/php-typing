<?php

$pdo = new PDO("mysql:host=192.168.192.2;dbname=phpweb", "root", "root");

$sql = "INSERT INTO pessoa VALUE (?, ?, ?)";

$pdo_enviar = $pdo->prepare($sql);
$pdo_enviar->bindValue(1, 18);
$pdo_enviar->bindValue(2, 'Marcioneide');
$pdo_enviar->bindValue(3, 52);
$pdo_enviar->execute();


$sql = "SELECT * FROM pessoa";
$pdo_enviar = $pdo->prepare($sql);
$pdo_enviar->execute();

echo '<pre>';

if ($pdo_enviar->rowCount() > 0){

  $resultado = $pdo_enviar->fetchAll(PDO::FETCH_ASSOC);
  print_r($resultado);
}




