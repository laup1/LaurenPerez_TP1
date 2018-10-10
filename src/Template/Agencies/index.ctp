<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency[]|\Cake\Collection\CollectionInterface $agencies
 */
?>

<div class="agencies index large-9 medium-8 columns content">
    <h3><?= __('Agencies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="visibility: hidden"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agencie_details') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agencies as $agency): ?>
            <tr>
                <td  style="visibility: hidden"><?= $this->Number->format($agency->id) ?></td>
                <td><?= h($agency->agencie_details) ?></td>
                <td><?= h($agency->created) ?></td>
                <td><?= h($agency->modified) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agency->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agency->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id)]) ?>
                    
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
