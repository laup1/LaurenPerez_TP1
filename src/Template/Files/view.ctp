<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>

<div class="files view large-9 medium-8 columns content">
    <h3><?= h($file->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($file->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($file->path) ?></td>
        </tr>
        <tr>
            <th scope="row"  style="visibility: hidden"><?= __('Id') ?></th>
            <td  style="visibility: hidden"><?= $this->Number->format($file->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($file->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($file->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $file->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agencies') ?></h4>
        <?php if (!empty($file->agencies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"  style="visibility: hidden"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agencie Details') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Code Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($file->agencies as $agencies): ?>
            <tr>
                <td  style="visibility: hidden"><?= h($agencies->id) ?></td>
                <td><?= h($agencies->agencie_details) ?></td>
                <td><?= h($agencies->created) ?></td>
                <td><?= h($agencies->modified) ?></td>
                <td><?= h($agencies->user_id) ?></td>
                <td><?= h($agencies->code_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agencies', 'action' => 'view', $agencies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agencies', 'action' => 'edit', $agencies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agencies', 'action' => 'delete', $agencies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agencies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
