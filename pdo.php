<?php

$host = "localhost"; // সার্ভার হোস্ট
$dbname = "schhol_web"; // ডাটাবেস নাম
$username = "root"; // ইউজারনেম
$password = ""; // পাসওয়ার্ড

// PDO সংযোগ সেটআপ
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
?>