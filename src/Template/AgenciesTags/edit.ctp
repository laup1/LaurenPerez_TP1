<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesTag $agenciesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agenciesTag->agency_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agenciesTag->agency_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agencies Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agenciesTags form large-9 medium-8 columns content">
    <?= $this->Form->create($agenciesTag) ?>
    <fieldset>
        <legend><?= __('Edit Agencies Tag') ?></legend>
        <?php
            echo $this->Form->control('agencie_id');
            echo $this->Form->control('tag_id', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
