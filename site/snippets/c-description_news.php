<!-- CSS:
_layout 
_typography -->


<article class="sidebar">
    <div>
        <div class="sidebar-info">
        <div data-flickity='{ 
                "wrapAround": true, 
                "autoPlay": 1500, 
                "fade": true
            }' class="caroussel-sidebar">
    <?php foreach ($part->images() as $image) : ?>
        <div class="slider-cell-sidebar">
            <img src="<?= $image->url() ?>" alt="" class="">
        </div>
    <?php endforeach ?>
    </div>

        </div>

        <div class="sidebar-body stack">
            <?= $part->text()->kt() ?>
        </div>


    </div>

</article>


