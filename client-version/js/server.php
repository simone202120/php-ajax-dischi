<?php
 include __DIR__ . '/../database.php';

header('Content-type: application/json');
 ECHO json_encode($database);


?>