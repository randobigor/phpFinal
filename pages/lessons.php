<?
$idc = $_GET['course_id'];
// echo $idc;
$pdo = new PDO('mysql:host=localhost; dbname=finaltask', 'root', '');
$sql = "SELECT id, name, preview FROM lessons WHERE course = {$idc}";
$statement = $pdo->query($sql);
$lessons = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div id="lessons" class="row container">
    <a href="index.php?page=courses"><i class="fas fa-arrow-left"></i> Назад к курсам</a>
    <? if (count($lessons) != 0) { ?>
        <? foreach ($lessons as $lesson) { ?>
            <a href="index.php?page=lesson&course_id=<?= $idc?>&lesson_id=<?= $lesson['id'] ?>" class="mt-2 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $lesson['preview'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lesson['name'] ?></h5>
                    </div>
                </div>
            </a>
        <? } ?>
    <? } else echo "<h1 class='text-warning m-auto'>По этому курсу пока нет уроков<h1>" ?>
</div>