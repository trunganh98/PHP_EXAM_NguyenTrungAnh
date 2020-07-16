<?php

$hn = 'localhost';
$un = 'root';
$pw = '';
$db = 'exam_php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno) die("Connect SQL Fail!!!");
?>