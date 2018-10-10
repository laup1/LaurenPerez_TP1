<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesFile[]|\Cake\Collection\CollectionInterface $agenciesFiles
 */
?>

<div class="agenciesFiles index large-9 medium-8 columns content">
    <h3><?= __('Agencies Files') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="visibility: hidden"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="visibility: hidden"><?= $this->Paginator->sort('agencie_id') ?></th>
                <th scope="col" style="visibility: hidden"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agenciesFiles as $agenciesFile): ?>
            <tr>
                <td style="visibility: hidden"><?= $this->Number->format($agenciesFile->id) ?></td>
                <td style="visibility: hidden"><?= $agenciesFile->has('agency') ? $this->Html->link($agenciesFile->agency->id, ['controller' => 'Agencies', 'action' => 'view', $agenciesFile->agency->id]) : '' ?></td>
                <td style="visibility: hidden"><?= $agenciesFile->has('file') ? $this->Html->link($agenciesFile->file->name, ['controller' => 'Files', 'action' => 'view', $agenciesFile->file->id]) : '' ?></td>
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
