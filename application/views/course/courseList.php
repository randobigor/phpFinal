<div class="text-center card-grid text-center">
    <? foreach ($courses as $course) : ?>
        <div class="card">
            <img class="card-img-top" src="/<?= $course['preview']?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $course['name']?></h5>
                <p class="card-text"><?= $course['description']?></p>
            </div>
            <div class="card-footer">
                <a href="/course/<?= $course['id']?>">Go to the course</a>
            </div>
        </div>
    <? endforeach ?>
</div>

<style>
    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
        grid-gap: 1vw;
    }
</style>