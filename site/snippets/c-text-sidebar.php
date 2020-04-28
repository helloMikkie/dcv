<!-- CSS:
_layout 
_typography -->

<article class="sidebar">
    <div>
        <div class="sidebar-info">
            <?php foreach ($part->images() as $image) : ?>
                <img src="<?= $image->url() ?>" alt="" class="">
            <?php endforeach ?>
        </div>

        <div class="sidebar-body text stack">
            <?= $part->text()->kt() ?>
        </div>
    </div>
</article>


