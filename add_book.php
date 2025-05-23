<?php
require 'db.php';

$title = $_POST['title'] ?? '';
$status = $_POST['status'] ?? 'to_read';
$current_page = $_POST['current_page'] ?? 0;
$total_pages = $_POST['total_pages'] ?? 0;

if ($title) {
    $sql = "INSERT INTO books (title, status, current_page, total_pages) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $status, $current_page, $total_pages]);
}

header('Location: index.php');
exit;
?>
