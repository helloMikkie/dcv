<?php snippet('header-white') ?>


<section class="wrapper bg-black">
    
<h1 class="page-title"><?= $page->title() ?></h1>
<?php foreach ($page->children()->listed() as $part) : ?>

    <?php snippet($part->intendedTemplate(), compact('part')) ?>

<?php endforeach ?>



<?php snippet('footer-white') ?>
