<?php
require 'db.php';

$stmt = $pdo->prepare("UPDATE employees SET
  name = :name,
  dob = :dob,
  specialty = :specialty,
  married = :married,
  children = :children
  WHERE id = :id");

$stmt->execute([
  ':id' => $_POST['id'],
  ':name' => $_POST['name'],
  ':dob' => $_POST['dob'],
  ':specialty' => $_POST['specialty'],
  ':married' => $_POST['married'],
  ':children' => $_POST['children']
]);
?>