<?php
require 'db.php';

// Preluăm cărțile din DB
$stmt = $pdo->query("SELECT * FROM books ORDER BY created_at DESC");
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8" />
    <title>Lista Cărți</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <h1>Lista Cărți</h1>

    <form action="add_book.php" method="POST">
        <input type="text" name="title" placeholder="Titlul cărții" required />
        <select name="status">
            <option value="to_read">De citit</option>
            <option value="in_progress">În progres</option>
            <option value="read">Citită</option>
            <option value="to_buy">De cumpărat</option>
        </select>
        <input type="number" name="current_page" placeholder="Pagina curentă" min="0" />
        <input type="number" name="total_pages" placeholder="Total pagini" min="0" />
        <button type="submit">Adaugă carte</button>
    </form>

    <h2>Cărți</h2>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <strong><?= htmlspecialchars($book['title']) ?></strong> -
                Status: <?= $book['status'] ?>,
                Pagina curentă: <?= $book['current_page'] ?>/<?= $book['total_pages'] ?>
                <!-- poți adăuga și butoane pentru editare/ștergere -->
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
