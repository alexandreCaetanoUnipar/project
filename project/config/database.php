<?php
$mongoClient = new MongoDB\Client('mongodb+srv://admin:senha54321@project.hpy4t.mongodb.net/?retryWrites=true&w=majority&appName=Project');
$database = $mongoClient->selectDatabase('escola');
?>