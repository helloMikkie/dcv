
<section data-flickity='{ 
    "wrapAround": true, 
    "autoPlay": 1500, 
    "fade": true,
    "arrowShape": "M0.131839 71L40.4153 141.496L42.1518 140.504L2.43534 71L42.1518 1.49618L40.4153 0.503904L0.131839 71Z"
}' class="caroussel">


    <?php foreach ($part->images() as $image) : ?>
        <div class="slider-cell">
            <?= $image ?>
            <div class="slider-heading" >
                <h2 class="heading-1"><?= $image->author()?></h2>
                <h3 class="heading-1"><?= $image->book_title() ?></h3>
            </div>

        </div>
    <?php endforeach ?>


</section>

