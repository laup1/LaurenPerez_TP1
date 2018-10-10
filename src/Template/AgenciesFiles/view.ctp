<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesFile $agenciesFile
 */
?>

<div class="agenciesFiles view large-9 medium-8 columns content">
    <h3><?= h($agenciesFile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Agency') ?></th>
            <td><?= $agenciesFile->has('agency') ? $this->Html->link($agenciesFile->agency->id, ['controller' => 'Agencies', 'action' => 'view', $agenciesFile->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= $agenciesFile->has('file') ? $this->Html->link($agenciesFile->file->name, ['controller' => 'Files', 'action' => 'view', $agenciesFile->file->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agenciesFile->id) ?></td>
        </tr>
    </table>
</div>
