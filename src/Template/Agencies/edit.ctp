<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id)]
            )
        ?>
</nav>
<div class="agencies form large-9 medium-8 columns content">
    <?= $this->Form->create($agency) ?>
    <fieldset>
        <legend><?= __('Edit Agency') ?></legend>
        <?php
            echo $this->Form->control('agencie_details');
            echo $this->Form->hidden('user_id',['value' => $user['id']]);
            echo $this->Form->control('code_id', ['options' => $codes]);
            echo $this->Form->control('files._ids', ['options' => $files]);
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
