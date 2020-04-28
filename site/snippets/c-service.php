
<!-- CSS: 
    _layout 
    _typography -->

<article class="sidebar-contact ">
    <div >
        
        <h2 class="sidebar-contact-category uppercase"><?= $part->category() ?></h2>

        <div class="sidebar-contact-body">
            <?php foreach ($part->item()->toStructure() as $item) : ?>
                <div class="sidebar-contact-body-item">
                    <h3><?= $item->name() ?></h3>
                    <?= $item->text()->kt() ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</article>