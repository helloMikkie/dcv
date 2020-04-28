<!-- CSS:
    _caroussel
    _typography
-->
<section data-flickity='{ "contain": true, "cellAlign": "left"}' class="caroussel-news">
    <?php foreach ($part->item()->toStructure() as $new) : ?>
        <div class="slider-cell-news">
            <h2 class="slider-cell-news-heading"><?= $new->heading()?></h2>
            <!-- <?= $new->text()->kt() ?> -->
        </div>
    <?php endforeach ?>
</section>

