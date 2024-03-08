<?php

require_once('db.php');

$mail = $_POST['mail'];
$pass = $_POST['pass'];

if (empty($mail) || empty($pass)) {
   echo "Ахуел не заполнять все поля???";
} else {
   $sql = "SELECT * FROM `register` WHERE mail = '$mail' AND pass = '$pass'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
         echo "Добро пожаловать, " . $row['firstName'];
      }
   } else {
      echo "Ты меня наебать решил??? Нету такого пользователя";
   }
}

?>