<table class="migration-table table table-bordered table-striped">
    <thead>
    <tr>
        <th><?=t('Handle')?></th>
        <th><?=t('Name')?></th>
        <th><?=t('Categories')?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($collection->getTypes() as $type) {
    $validator = $type->getPublisherValidator();
    ?>
    <tr <?php if ($validator->skipItem()) {
    ?>class="migration-item-skipped"<?php 
}
    ?>>
        <td><?=$type->getHandle()?></td>
        <td><?=$type->getName()?></td>
        <td><?=implode(', ', $type->getCategories())?></td>
    <?php 
} ?>
    </tbody>
</table>
