<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesFile[]|\Cake\Collection\CollectionInterface $agenciesFiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agencies File'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agenciesFiles index large-9 medium-8 columns content">
    <h3><?= __('Agencies Files') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agencie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agenciesFiles as $agenciesFile): ?>
            <tr>
                <td><?= $this->Number->format($agenciesFile->id) ?></td>
                <td><?= $agenciesFile->has('agency') ? $this->Html->link($agenciesFile->agency->id, ['controller' => 'Agencies', 'action' => 'view', $agenciesFile->agency->id]) : '' ?></td>
                <td><?= $agenciesFile->has('file') ? $this->Html->link($agenciesFile->file->name, ['controller' => 'Files', 'action' => 'view', $agenciesFile->file->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agenciesFile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agenciesFile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agenciesFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenciesFile->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
