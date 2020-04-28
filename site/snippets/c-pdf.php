

    <?php foreach ($part->images() as $image) : ?>

        <a href="#" class="program" target="_blank">
            <img src="<?= $image->url() ?>" alt="<?= $image->title() ?>">
            <div>
                <h2 class="heading-2"><?= $image->season() ?></h2>
            </div>
        </a>

<?php endforeach ?>

