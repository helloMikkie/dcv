<?php snippet('header') ?>




<section class="wrapper-margin">
        <h1 class="page-title"><?= $page->title() ?></h1>
        <?php foreach ($page->children()->listed() as $part) : ?>
                <?php snippet($part->intendedTemplate(), compact('part')) ?>
        <?php endforeach ?>
</section>


<?php snippet('footer') ?>
