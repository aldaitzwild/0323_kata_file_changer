<?php
/**
 * Remplacez dans le fichier message.txt
 * tous les #NAME# par votre prénom.
 */

 $message = file_get_contents('message.txt');
 $message = str_replace('#NAME#', 'Thomas', $message);
 file_put_contents('message.txt', $message);