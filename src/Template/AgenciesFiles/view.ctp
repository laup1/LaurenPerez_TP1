<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesFile $agenciesFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agencies File'), ['action' => 'edit', $agenciesFile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agencies File'), ['action' => 'delete', $agenciesFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenciesFile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencies Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agencies File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
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
