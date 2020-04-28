<!-- CSS:
_components  -->

<ul class="editions-list">
<?php foreach($part->item()->toStructure() as $item): ?>
    <li class="editions-list-item heading-1">
        <a href="<?= url('edition') ?>" ><?= $item->heading() ?></a>
    </li>
<?php endforeach ?>

</ul>