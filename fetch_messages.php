<?php

$memcached = new Memcached();
$memcached->addServer('memcached', 11211);

if ($memcached->get('messages') == false) {
    $memcached->set('messages', array("<b>Messages containing profanity or sexual nature will be deleted.</b>"));
}

$messages = $memcached->get('messages');

foreach ($messages as $message) {
    echo "<p>{$message}</p>";
}
?>
