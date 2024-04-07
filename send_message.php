<?php
$memcached = new Memcached();
$memcached->addServer('memcached', 11211);
$messages = $memcached->get('messages');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {

    $username =  $_POST["username"];
    $message =  $_POST["message"];

    $dbFile = 'moderation.db';
    $db = new PDO('sqlite:' . $dbFile);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $db->query('SELECT word FROM words');
    $bad_words = $query->fetchAll(PDO::FETCH_COLUMN);

    $message_words = preg_split('/\s+/', $message);

    foreach ($message_words as $message_word) {
        if (in_array(strtolower($message_word), array_map('strtolower', $bad_words))) {
            $message = "BAD WORD DETECTED";
            break;
        }
    }

    array_push($messages, "<b>" . date('d/m/Y H:i') . " " . $username . ": </b>" . $message);

    $memcached->set('messages', $messages);

}
?>
