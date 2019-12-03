<?php
$idl = $_GET['lesson_id'];
$idc = $_GET['course_id'];
$pdo = new PDO('mysql:host=localhost; dbname=finaltask', 'root', '');
$sql = "SELECT src FROM lessons WHERE id = {$idl}";
$statement = $pdo->query($sql);
$lesson = $statement->fetchAll(PDO::FETCH_ASSOC);
?> 

<div class="lesson">
    <!-- <a href="index.php?page=lessons&course_id=<?= $idc ?>"><i class="fas fa-arrow-left"></i> Назад к урокам</a> -->
    <br>
    <div class="embed-responsive embed-responsive-16by9 mt-3">
        <iframe class="embed-responsive-item" src="<?= $lesson[0]['src']?>" allowfullscreen></iframe>
    </div>
</div>