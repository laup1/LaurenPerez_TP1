<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesFile $agenciesFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agenciesFile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agenciesFile->id)]
            )
        ?>
<div class="agenciesFiles form large-9 medium-8 columns content">
    <?= $this->Form->create($agenciesFile) ?>
    <fieldset>
        <legend><?= __('Edit Agencies File') ?></legend>
        <?php
            echo $this->Form->control('agencie_id', ['value' => $employer]);
            echo $this->Form->control('file_id', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
