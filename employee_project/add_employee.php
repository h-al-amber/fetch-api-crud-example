<?php
require 'db.php';

$stmt = $pdo->prepare("INSERT INTO employees (name, dob, specialty, married, children)
                       VALUES (:name, :dob, :specialty, :married, :children)");

$stmt->execute([
  ':name' => $_POST['name'],
  ':dob' => $_POST['dob'],
  ':specialty' => $_POST['specialty'],
  ':married' => $_POST['married'],
  ':children' => $_POST['children']
]);
