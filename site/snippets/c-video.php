
<?php if($part->overwrite() == 'book'): ?>
<article class="video">
    <div class="embed-container">
        <?= vimeo($part->video() ) ?>
    </div>
</article>

<?php elseif ($part->overwrite() == 'edition') : ?>
    <article class="video video-edition">
    <div class="embed-container">
        <?= vimeo($part->video() ) ?>
    </div>
</article>

<?php endif ?>