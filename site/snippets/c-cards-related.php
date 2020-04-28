<!-- CSS:
    _cards -->

    <!-- Heading  -->
<?php if($part->overwrite() == 'book'): ?>
    <h2 class="heading-devider devider-black heading-2"><?= $part->heading() ?></h2>
<?php elseif($part->overwrite() == 'edition'): ?>
    <h2 class="heading-devider devider-white heading-2"><?= $part->heading() ?></h2>
<?php endif ?>


<!--  -->
<article class="reel-grid">
<div class="reel-grid__list">
    <?php foreach ($part->images() as $image) : ?>


        <div class="book">
        <img class="book-cover" src="<?= $image->url() ?>" alt="<?= $image->book_title() ?>">
            <div class="book-heading">
                <h2 class="heading-3"><?= $image->author() ?></h2>
                <h3 class="heading-3"><?= $image->book_title() ?></h3>
        </div>
        </div>


<?php endforeach ?>
    </div>
</article>


