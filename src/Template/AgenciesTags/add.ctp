<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesTag $agenciesTag
 */
?>

<div class="agenciesTags form large-9 medium-8 columns content">
    <?= $this->Form->create($agenciesTag) ?>
    <fieldset>
        <legend><?= __('Add Agencies Tag') ?></legend>
        <?php
            echo $this->Form->control('agencie_id');
            echo $this->Form->control('tag_id', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
