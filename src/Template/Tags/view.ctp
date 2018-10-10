<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>

<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($tag->title) ?></td>
        </tr>
        <tr>
            <th scope="row"  style="visibility: hidden"><?= __('Id') ?></th>
            <td  style="visibility: hidden"><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agencies') ?></h4>
        <?php if (!empty($tag->agencies)): ?>
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
            <?php foreach ($tag->agencies as $agencies): ?>
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
