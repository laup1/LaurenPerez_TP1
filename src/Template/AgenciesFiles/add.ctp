<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesFile $agenciesFile
 */
?>

<div class="agenciesFiles form large-9 medium-8 columns content">
    <?= $this->Form->create($agenciesFile) ?>
    <fieldset>
        <legend><?= __('Add Agencies File') ?></legend>
        <?php
            echo $this->Form->control('agencie_id', ['value' => $agencie]);
            echo $this->Form->control('file_id', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
