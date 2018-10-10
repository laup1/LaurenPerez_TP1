<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Code $code
 */
?>

<div class="codes view large-9 medium-8 columns content">
    <h3><?= h($code->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code Description') ?></th>
            <td><?= h($code->code_description) ?></td>
        </tr>
        <tr>
            <th scope="row"  style="visibility: hidden"><?= __('Id') ?></th>
            <td  style="visibility: hidden"><?= $this->Number->format($code->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($code->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($code->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($code->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"  style="visibility: hidden"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($code->users as $users): ?>
            <tr>
                <td  style="visibility: hidden"><?= h($users->id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
