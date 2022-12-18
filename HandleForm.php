<?php

include 'config.php';

list('name' => $name, 'email' => $email, 'comment' => $comment) = $_REQUEST;

if (!$name | !$email | !$comment) {
        header('Location: /');
}

$db = new SQLite3($db_file);

$db->enableExceptions(true);

try {
        $db->exec("INSERT INTO $db_name (name, email, comment) VALUES('$name', '$email', '$comment')");

        print "Thanks for answering!";
} catch (Exception) {
        print "$name, something went wrong with the Database!";

        print '<a href="/">Return Home</a>';

        die();
}
