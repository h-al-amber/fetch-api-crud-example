<?php
require 'db.php';

$stmt = $pdo->prepare("DELETE FROM employees WHERE id = :id");
$stmt->execute([':id' => $_POST['id']]);
