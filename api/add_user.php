<?php

include_once "../include/connect.php";
// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');
// 資料檢查
$acc=htmlspecialchars(trim($_POST['acc']));

// $sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
// values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";
// $pdo->exec($sql);

insert("users",['acc'=>"{$acc}",
                'pw'=>"{$_POST['pw']}",
                'name'=>"{$_POST['name']}",
                'email'=>"{$_POST['email']}",
                'address'=>"{$_POST['address']}"]);

// 使用者key完資料後導向主頁
header("Location:../index.php");