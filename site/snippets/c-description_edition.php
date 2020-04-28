<div class="sidebar-heading heading-edition">
    <h2 class="heading-1"><?= $part->artist() ?></h2>
    <h3><?= $part->edition() ?></h3>
</div>


<article class="sidebar">
    <div>

        <div class="sidebar-info">

            <ul class="sidebar-info-partner">
                <li><span class="heading-4">Ansprechpartner</span> <?= $part->contact_name() ?></li>
                <li><a href="#" class="cta">Anfrage senden</a></li>
            </ul>

            <table class="sidebar-info-table table-edition">
                <?php foreach ($part->meta()->toStructure() as $item) : ?>
                    <tr>
                        <th class="heading-4"><?= $item->key() ?></th>
                        <td class="small"> <?= $item->text() ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <div class="sidebar-body stack">
            <?= $part->intro()->kt() ?>
            <?= $part->description()->kt() ?>
        </div>

    </div>

</article>