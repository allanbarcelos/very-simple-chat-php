<?php
$dbFile = 'moderation.db';

try {
    $db = new PDO('sqlite:' . $dbFile);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec('CREATE TABLE IF NOT EXISTS words (word TEXT)');

    $words = array(
       // ADD NEW BAD WORDS HERE
    );

    if (!$db) {
        die("Erro ao conectar ao banco de dados.");
    }

    $stmt = $db->prepare('INSERT INTO words (word) VALUES (:word)');

    foreach ($words as $word) {
        $stmt->bindParam(':word', $word);
        $stmt->execute();
    }

    echo "Success";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
