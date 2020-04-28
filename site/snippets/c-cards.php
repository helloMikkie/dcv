<section class="grid-books">

    <?php foreach ($part->images() as $image) : ?>

        <?php if ($image->overwrite() == 'standard') : ?>
            <a href="<?= url('book-detail') ?>" >
                <article class="book standard">
                    <img class="book-cover" src="<?= $image->url() ?>" alt="<?= $image->book_title() ?>">
                    <div class="book-heading">
                        <h2 class="heading-3"><?= $image->author() ?></h2>
                        <h3 class="heading-3"><?= $image->book_title() ?></h3>
                    </div>
                </article>
            </a>

            <!-- + + + + + + + +  Book Feature:  + + + + + + + + + -->

        <?php elseif ($image->overwrite() == 'featured') : ?>

            <article class="featured-book">
                <div class="featured-book-inner">
                    <div class="featured-book-heading">
                        <h2 class="heading-1"><?= $image->author() ?></h2>
                        <h3 class="heading-1"><?= $image->book_title() ?></h3>
                    </div>
                    <div class="featured-book-body">
                        <a href="">
                            <img class="book-cover-featured" src="<?= $image->url() ?>" alt="<?= $image->book_title() ?>">
                        </a>
                        <p class="book-body"><?= $image->book_description() ?></p>
                    </div>
                </div>
            </article>

            <!-- + + + + + + + +  + + + + + + + +   + + + + + + + + + -->

        <?php elseif ($image->overwrite() == 'new') : ?>
            <a href="#">
                <article class="book new-book">
                    <img class="book-cover" src="<?= $image->url() ?>" alt="<?= $image->book_title() ?>">
                    <div class="book-heading">
                        <h2 class="heading-3"><?= $image->author() ?></h2>
                        <h3 class="heading-3"><?= $image->book_title() ?></h3>
                    </div>

                </article>
            </a>

        <?php elseif ($image->overwrite() == 'preview') : ?>
            <a href="">
                <article class="book preview-book">
                    <img class="book-cover" src="<?= $image->url() ?>" alt="<?= $image->book_title() ?>">
                    <div class="book-heading">
                        <h2 class="heading-3"><?= $image->author() ?></h2>
                        <h3 class="heading-3"><?= $image->book_title() ?></h3>
                    </div>
                    <p><?= $image->book_description() ?></p>
                </article>
            </a>


        <?php endif ?>
    <?php endforeach ?>
</section>