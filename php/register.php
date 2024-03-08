<?php

require_once('db.php');
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$warning = "";


if (empty($firstName) || empty($lastName) || empty($mail) || empty($phone) || empty($pass)) {
   $warning = "заполнены не все поля!";
} else {
   $sql = "INSERT INTO `register` (firstName, lastName, mail, phone, pass) VALUES ('$firstName', '$lastName', '$mail', '$phone', '$pass')";

   if ($conn->query($sql) === TRUE) {
      $warning = "Нормально";
   }
}

echo $warning;