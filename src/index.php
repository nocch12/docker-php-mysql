<?php

$dns = 'mysql:dbname=docker_db;host=dpm_mysql';
$user = 'docker_user';
$password = 'docker_pass';

try {
    $db = new PDO($dns, $user, $password);
    print('接続に成功しました。' . PHP_EOL);

    $stmt = $db->prepare('SELECT * FROM test');

    $stmt->execute();
    print('executed' . PHP_EOL);
    
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

} catch (PDOException $e) {
    print($e->getMessage());
    die();
}