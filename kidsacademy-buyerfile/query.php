<?php
// SQL query লিখুন for home page
$sql = "SELECT * FROM home_page_setting";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// ডাটা ফেচ করুন
$web = $stmt->fetchAll(PDO::FETCH_OBJ);



// SQL query লিখুন about and explore us section
$sql = "SELECT * FROM about_us_tbl";
$abt = $pdo->prepare($sql);
$abt->execute();

// ডাটা ফেচ করুন
$exp = $abt->fetchAll(PDO::FETCH_OBJ);



// SQL query লিখুন teacher page
$sql = "SELECT * FROM teacher_list";
$tcr = $pdo->prepare($sql);
$tcr->execute();

// ডাটা ফেচ করুন
$all_tcr = $tcr->fetchAll(PDO::FETCH_OBJ);



// SQL query লিখুন banner and slider
$sql = "SELECT * FROM tbl_slider_list";
$bnr = $pdo->prepare($sql);
$bnr->execute();

// ডাটা ফেচ করুন
$sldr = $bnr->fetchAll(PDO::FETCH_OBJ);



?>