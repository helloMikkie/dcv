<section class="grid-news">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>

    <?php foreach ($part->images() as $image) : ?>

        <?php if ($image->einstellung() == 'no-image') : ?>
            <article class="news ">
            <div class="news-body small">
                    
                    <h2 class="news-heading bold" ><?= $image->headline() ?></h2>
                    <p class="bold"><?= $image->datum()->toDate('d. M Y') ?></p>
                    <p><?= $image->text()->kt()->excerpt(300) ?></p>
                </div>
            </article>

        <?php elseif ($image->einstellung() == 'image') : ?>

            <article class="news">
                <img src="<?= $image->url() ?>" alt="<?= $image->title() ?>">
                <div class="news-body small">
                    <h2 class="news-heading bold"><?= $image->headline() ?></h2>
                    <p class="bold"><?= $image->datum()->toDate('d. M Y') ?></p>
                    <p><?= $image->text()->kt()->excerpt(300) ?></p>

                <?php if($image->featured() ==  'true'): ?>
                    <a href="<?= url('news-detail') ?>" class="cta">mehr</a>
                <?php endif ?>
                </div>
            </article>

        <?php endif ?>
    <?php endforeach ?>
</section>