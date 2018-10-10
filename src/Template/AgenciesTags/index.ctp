<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesTag[]|\Cake\Collection\CollectionInterface $agenciesTags
 */
?>

<div class="agenciesTags index large-9 medium-8 columns content">
    <h3><?= __('Agencies Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"  style="visibility: hidden"><?= $this->Paginator->sort('agencie_id') ?></th>
                <th scope="col"  style="visibility: hidden"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agenciesTags as $agenciesTag): ?>
            <tr>
                <td><?= $this->Number->format($agenciesTag->agencie_id) ?></td>
                <td><?= $agenciesTag->has('tag') ? $this->Html->link($agenciesTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $agenciesTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agenciesTag->agency_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agenciesTag->agency_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agenciesTag->agency_id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenciesTag->agency_id)]) ?>
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
