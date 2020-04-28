<!-- CSS:
    _caroussel
    _typography
-->
<article class="marquee">
    <?php foreach ($part->item()->toStructure() as $new) : ?>
            <h2 class="heading-1"><a href="#"><?= $new->heading()?></a><span></span></h2>
            
    <?php endforeach ?>
</article>