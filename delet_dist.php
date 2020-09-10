<?php

  session_start();
  include "conexao.php";
  $conn = connection();
//Vai substituir --> $conn = new PDO...

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("DELETE FROM empresas WHERE id=:id");
  $stmt->bindParam(':id', $id);

  $id    = $_GET['id'];
  $stmt->execute();

  $_SESSION['msg_del'] = "Empresa excluída com sucesso!";
    } catch(PDOException $e) {
        $_SESSION['msg_del'] = "Error: " . $e->getMessage();
    }
$conn = null;

header('Location: index_dist.php');

?>
