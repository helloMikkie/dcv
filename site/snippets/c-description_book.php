<!-- CSS:
_layout 
_typography -->

<div class="sidebar-heading heading-book">
    <h1 class="heading-1"><?= $part->author() ?></h1>
    <h2 class="heading-1"><?= $part->book() ?></h2>
</div>

<!-- CSS: _components -->
<div class="price-tag">
    <a href="#" class="price-tag-link">€<?= $part->price() ?></a>
</div>


<article class="sidebar">
    <div>
        <div class="sidebar-info">
            <table class="sidebar-info-table table-book">
                <?php foreach ($part->meta()->toStructure() as $item) : ?>
                    <tr>
                        <th class="heading-4"><?= $item->key() ?> </th>
                        <td class="small"><?= $item->text() ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <div class="sidebar-body stack">
            <?= $part->text()->kt() ?>
        </div>


    </div>

</article>