<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>

<div class="agencies view large-9 medium-8 columns content">
    <h3 style="visibility: hidden"><?= h($agency->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Agencie Details') ?></th>
            <td><?= h($agency->agencie_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td ><?= $agency->has('user') ? $this->Html->link($agency->user->id, ['controller' => 'Users', 'action' => 'view', $agency->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row" ><?= __('Code') ?></th>
            <td ><?= $agency->has('code') ? $this->Html->link($agency->code->id, ['controller' => 'Codes', 'action' => 'view', $agency->code->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row" style="visibility: hidden"><?= __('Id') ?></th>
            <td style="visibility: hidden"><?= $this->Number->format($agency->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agency->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agency->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($agency->files)): ?>
        <table cellpadding="0" cellspacing="0">
              <tr>
                    <th scope="col"><?= __('Image') ?></th>
               </tr>
                <?php foreach ($agency->files as $files): ?>
                    <tr>
                        <td>
                            <?php
                            echo $this->Html->image($files->path . $files->name, [
                                "alt" => $files->name,
                            ]);
                            ?>
                        </td>
                    </tr>
            <?php endforeach; ?>
            </table>
            <?php foreach ($agency->files as $files): ?>
            <tr>
                <td style="visibility: hidden"><?= h($files->id) ?></td>
                <td><?= h($files->name) ?></td>
                <td><?= h($files->path) ?></td>
                <td><?= h($files->created) ?></td>
                <td><?= h($files->modified) ?></td>
                <td><?= h($files->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Files', 'action' => 'view', $files->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Files', 'action' => 'edit', $files->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $files->id], ['confirm' => __('Are you sure you want to delete # {0}?', $files->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($agency->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col" style="visibility: hidden"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agency->tags as $tags): ?>
            <tr>
                <td style="visibility: hidden"><?= h($tags->id) ?></td>
                <td><?= h($tags->title) ?></td>
                <td><?= h($tags->created) ?></td>
                <td><?= h($tags->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
