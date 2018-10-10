<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users view large-9 medium-8 columns content">
    
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($user->type) ?></td>
        </tr>
        <tr>
            <th   style="visibility: hidden" scope="row"><?= __('Id') ?></th>
            <td  style="visibility: hidden"><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agencies') ?></h4>
        <?php if (!empty($user->agencies)): ?>
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
            <?php foreach ($user->agencies as $agencies): ?>
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
