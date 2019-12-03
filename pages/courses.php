<?
$pdo = new PDO('mysql:host=localhost; dbname=finaltask', 'root', '');
$sql = "SELECT id, name, price, preview FROM courses";
$statement = $pdo->query($sql);
$courses = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="courses" class="row text-center">
    <!-- <a href="index.php?page=courses"><i class="fas fa-arrow-left"></i> Назад к курсам</a> -->
    <? foreach ($courses as $course) { ?>
        <a href="index.php?page=lessons&course_id=<?= $course['id'] ?>" class="mt-2 mx-auto">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $course['preview'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $course['name'] ?></h5>
                </div>
            </div>
        </a>
    <? } ?>
</div>