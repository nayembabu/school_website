<?php
include 'pdo.php';

$hi= $_GET['perameter'];
//table name      colum name
$sql_query = "SELECT * FROM about_us_tbl WHERE about_us_tbl_pr_at_iddd = ?";
$stm=$pdo->prepare($sql_query);
$stm->execute([$hi]);


$news_up = $stm->fetch(PDO::FETCH_OBJ);

?>




<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>সংবাদ | আস-সুমাহ ফাউন্ডেশন</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .news-card {
            background-color: white;
            width: 90%;
            max-width: 800px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .date {
            text-align: center;
            color: gray;
            font-size: 14px;
        }

        .news-image {
            width: 100%;
            border-radius: 5px;
            margin: 10px 0;
        }

        .content {
            text-align: justify;
            line-height: 1.6;
            color: #555;
        }
        .img-container {
    display: flex;
    flex-wrap: wrap;
    gap: 15px; /* ছবির মাঝে গ্যাপ */
    justify-content: center;
}

.imgs {
    width: calc(25% - 15px); /* চারটি ইমেজ সমান জায়গা নিবে */
    max-width: 200px;
    height: auto;
    object-fit: cover;
    border-radius: 10px; /* কার্ডের কোণা গোল */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* সুন্দর শ্যাডো */
    transition: transform 0.3s ease-in-out;
}

.imgs:hover {
    transform: scale(1.05); /* হোভার করলে ইফেক্ট */
}

@media (max-width: 768px) {
    .imgs {
        width: calc(50% - 15px); /* মোবাইল ভিউতে দুইটি করে দেখাবে */
    }
}

@media (max-width: 480px) {
    .imgs {
        width: 100%; /* ছোট স্ক্রিনে একটানা পুরো জায়গা নিবে */
    }
}

    </style>
</head>
<body>
    <div class="news-card">
        <h2><?php echo $news_up->about_full_titlesss ;?> </h2>
        <p class="time"><?php echo $news_up->about_creating_timingsss;?></p>
        
        <p class="date"><?php echo $news_up->about_creating_datessss;?></p>

        <img src="t.jpg" alt="News Image" class="news-image">

        <p class="content">
           <?php echo $news_up->about_full_des_cription_ssss; ?>
        </p>

        <h3 class="content">
            ২৯ অক্টোবর রাজধানীর বসুন্ধরা ইন্টারন্যাশনাল কনভেনশন সিটিতে এক আনুষ্ঠানিক সেমিনারে ৩০০ শহীদ পরিবারকে ১ লাখ টাকা করে প্রদান করা হয়েছে।
</h3>

        <img src="t.jpg" alt="News Image" class="imgs">
        <img src="t.jpg" alt="News Image" class="imgs">
        <img src="t.jpg" alt="News Image" class="imgs">
        <img src="t.jpg" alt="News Image" class="imgs">

        <h3 class="content">
            অনুষ্ঠানে প্রধান অতিথি ছিলেন আস-সুমাহ ফাউন্ডেশনের সাধারণ সম্পাদক। এছাড়া উপস্থিত ছিলেন বিশিষ্ট ব্যক্তিবর্গ।
</h3>

        <img src="t.jpg" alt="News Image" class="imgs">
        <img src="t.jpg" alt="News Image" class="imgs">
        <img src="t.jpg" alt="News Image" class="imgs">
        <img src="t.jpg" alt="News Image" class="imgs">

        <p class="content">
            সহায়তার মাধ্যমে আমরা শহীদ পরিবারের পাশে থাকবো।
        </p>
    </div>
</body>
</html>